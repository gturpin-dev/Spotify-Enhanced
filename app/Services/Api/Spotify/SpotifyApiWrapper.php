<?php

namespace App\Services\Api\Spotify;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SpotifyApiWrapper
{
    protected static string $baseUrl = 'https://api.spotify.com/v1';
    protected string $access_token;

    public function __construct()
    {
        $this->access_token = Auth::user()->spotify_token;
    }

    /**
     * Get all of current user's playlists.
     *
     * @param int $offset The offset to start from
     * @param array $current_playlists The current playlists to append to, this function is called recursively so it needs to be passed to be accumulated
     *
     * @return array The user's playlists
     */
    public function get_playlists( int $offset = 0, $current_playlists = [] ): array {
        $limit    = 50;
        $response = Http::withToken( $this->access_token )
            ->get( self::$baseUrl . '/users/' . Auth::user()->spotify_id . '/playlists', [
                'limit'  => $limit,
                'offset' => $offset,
            ] );

        if ( ! $response->successful() ) {
            return $current_playlists;
        }

        $playlists                 = $response->json()['items'] ?? [];
        $response_has_another_page = $response->json()['next'] ?? false;
        $current_playlists         = array_merge( $current_playlists, $playlists );

        if ( $response_has_another_page ) {
            $current_playlists = $this->get_playlists( $offset + $limit, $current_playlists );
        }

        return $current_playlists;
    }
}
