<?php

namespace App\Http\Integrations\Spotify;

use App\DataObjects\Spotify\OAuthDetailsDTO;
use Saloon\Http\Request;
use Saloon\Http\Connector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\PaginationPlugin\Paginator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use App\Http\Integrations\Spotify\Requests\RefreshTokensRequest;
use App\Http\Integrations\Spotify\Paginations\PlaylistsPagination;
use App\Models\User;

class SpotifyConnector extends Connector implements HasPagination
{
    use AuthorizationCodeGrant;
    use AcceptsJson;

    public ?int $tries = 3;
    public ?int $retryInterval = 100;

    public function __construct(
        protected User $user,
    ) {}

    /**
     * The Base URL of the API.
     */
    public function resolveBaseUrl(): string
    {
        return 'https://api.spotify.com/v1';
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator( $this->user->spotify_token );
    }

    /**
     * Handle out of date token errors and refresh on the fly
     */
    public function handleRetry(FatalRequestException|RequestException $exception, Request $request): bool
    {
        // Handle only out-of-date token errors
        if ( ! $exception instanceof RequestException ) return false;
        if ( $exception->getResponse()->status() !== 401 ) return false;

        $this->refreshToken();

        return true;
    }

    protected function refreshToken(): void
    {
        $response = $this->send(
            new RefreshTokensRequest( $this->user->spotify_refresh_token )
        );

        $oauth_details = $response->dtoOrFail();
        $access_token  = $oauth_details->access_token;
        $refresh_token = $oauth_details->refresh_token ?? $this->user->spotify_refresh_token;

        $this->user->update( [
            'spotify_token'         => $access_token,
            'spotify_refresh_token' => $refresh_token
        ] );
    }

    public function paginate(Request $request): Paginator
    {
        return new PlaylistsPagination(
            connector: $this,
            request  : $request
        );
    }

    /**
     * The OAuth2 configuration
     */
    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId( config( 'services.spotify.client_id' ) )
            ->setClientSecret( config( 'services.spotify.client_secret' ) )
            ->setRedirectUri( config( 'services.spotify.redirect' ) )
            ->setDefaultScopes( config( 'services.spotify.scopes' ) )
            ->setAuthorizeEndpoint( config( 'services.spotify.authorize_endpoint' ) )
            ->setTokenEndpoint( config( 'services.spotify.token_endpoint' ) );
    }
}
