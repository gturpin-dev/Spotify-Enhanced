<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\Api\Spotify\SpotifyApiWrapper;

class FetchUserSpotifyPlaylists implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected User $user
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $spotifyService = new SpotifyApiWrapper( $this->user );
        $playlists      = $spotifyService->get_playlists();

        dd($playlists, $this->user);

        // @TODO save the playlists to the database | Another service, cast playlists into playlistDTOs
    }
}
