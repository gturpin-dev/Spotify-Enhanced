<?php

namespace App\Services\Api\Spotify;

use App\Enums\HttpMethod;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;

/**
 * Basic wrapper to interact with the Spotify API
 */
class SpotifyApiWrapper
{
    protected const MAX_REFRESH_ATTEMPTS = 3;
    protected static string $base_url    = 'https://api.spotify.com/v1';
    protected static string $refresh_url = 'https://accounts.spotify.com/api/token';
    protected string $access_token;

    public function __construct(
        protected ?User $user = null
    ) {
        $this->user ??= Auth::user();
    }

    /**
     * Set the user to act as for querying the API
     */
    public function act_as( User $user ): static {
        $this->user = $user;

        return $this;
    }

    /**
     * Make a request to the Spotify API
     * If the token is expired, it will be refreshed and the request will be retried
     *
     * @param HttpMethod $method The HTTP method to use
     * @param string $endpoint The endpoint to hit
     * @param array $params The query parameters to send
     *
     * @return Response The response from the API
     */
    protected function api_request( HttpMethod $method, string $endpoint, array $params = [] ): Response {
        $method   = Str::lower( $method->value );
        $response = Http::withToken( $this->user->spotify_token )
            ->retry(
                when: function ( \Exception $exception, PendingRequest $request ) {
                    // Bail if the exception is not an HTTP exception
                    if ( ! $exception instanceof RequestException ) return false;

                    // Bail if not an expired token error
                    if ( ! $exception->response->unauthorized() ) return false;

                    // Refresh the token and retry the request
                    $this->refresh_token();
                    $request->withToken( $this->user->spotify_token );

                    return true;
                },
                times            : self::MAX_REFRESH_ATTEMPTS,
                sleepMilliseconds: 100,
                throw            : false
            )
            ->$method( self::$base_url . $endpoint, $params );

        return $response;
    }

    /**
     * Refresh the access token
     *
     * @return bool Whether the token was refreshed or not
     */
    protected function refresh_token(): bool {
        $response = Http::asForm()
            ->withBasicAuth( config( 'services.spotify.client_id', '' ), config( 'services.spotify.client_secret', '' ) )
            ->post( self::$refresh_url, [
                'grant_type'    => 'refresh_token',
                'refresh_token' => $this->user->spotify_refresh_token,
                'client_id'     => config( 'services.spotify.client_id' ),
            ] );

        if ( ! $response->successful() ) {
            return false;
        }

        // Spotify may keep the same refresh token, so we need to update it only if it's returned
        $tokens = $response->json();
        $this->user->update( [
            'spotify_token'         => $tokens['access_token'] ?? $this->user->spotify_token,
            'spotify_refresh_token' => $tokens['refresh_token'] ?? $this->user->spotify_refresh_token,
        ] );

        return true;
    }

    /**
     * Get all current user's playlists
     *
     * @param int $offset The offset to start from
     * @param array $current_playlists The current playlists to append to, this function is called recursively so it needs to be passed to be accumulated
     *
     * @return array The user's playlists
     */
    public function get_playlists( int $offset = 0, $current_playlists = [] ): array {
        $limit    = 50;
        $response = $this->api_request( HttpMethod::GET, '/users/' . $this->user->spotify_id . '/playlists', [
            'limit'  => $limit,
            'offset' => $offset,
        ] );

        if ( ! $response->successful() ) {
            return $current_playlists;
        }

        $playlists                 = $response->json()['items'] ?? [];
        $response_has_another_page = (bool) ($response->json()['next'] ?? false);
        $current_playlists         = [ ...$current_playlists, ...$playlists ];

        if ( $response_has_another_page ) {
            $current_playlists = $this->get_playlists( $offset + $limit, $current_playlists );
        }

        return $current_playlists;
    }
}
