<?php

namespace App\Services\Spotify;

use App\DataObjects\Spotify\PlaylistDTO;
use App\Models\User;

class PlaylistService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Store the playlist in the database from a DTO
     *
     * @param PlaylistDTO $playlist_dto The playlist data transfer object
     * @param User $user The App user that just created the playlist
     */
    public function store( PlaylistDTO $playlist_dto, User $user ): void
    {
        $user->playlists()->create( [
            'spotify_id'       => $playlist_dto->spotify_id,
            'name'             => $playlist_dto->name,
            'description'      => $playlist_dto->description,
            'thumbnail_url'    => $playlist_dto->thumbnail_url,
            'owner'            => $playlist_dto->owner,
            'is_public'        => $playlist_dto->is_public,
            'is_collaborative' => $playlist_dto->is_collaborative
        ] );
    }
}
