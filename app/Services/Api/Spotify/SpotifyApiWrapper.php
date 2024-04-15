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
     * @return array
     */
    public function get_playlists(): array {
        $response = Http::withToken($this->access_token)
            ->get(self::$baseUrl . '/me/playlists');

        return $response->json();
    }
}
