<?php

namespace App\Services\Spotify;

use App\DataObjects\Spotify\PlaylistDTO;
use App\Models\User;

class PlaylistService
{
    /**
     * Store the playlist in the database from a DTO
     *
     * @param PlaylistDTO $playlist_dto The playlist data transfer object
     * @param User $user The App user that just created the playlist
     */
    public function store( PlaylistDTO $playlist_dto, User $user ): void
    {
        $user->playlists()->firstOrCreate( [
            'spotify_id' => $playlist_dto->spotify_id
        ], $playlist_dto->toArray() );
    }
}
