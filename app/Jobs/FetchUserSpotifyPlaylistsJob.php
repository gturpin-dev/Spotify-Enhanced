<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\DataObjects\Spotify\PlaylistDTO;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\Spotify\PlaylistService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\Api\Spotify\SpotifyApiWrapper;

class FetchUserSpotifyPlaylistsJob implements ShouldQueue
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
        $spotify_service  = new SpotifyApiWrapper( $this->user );
        $playlist_service = new PlaylistService();

        collect( $spotify_service->get_playlists() )
            ->map( fn( array $playlist ) => PlaylistDTO::from( $playlist ) )
            ->each( fn( PlaylistDTO $playlist_dto ) => $playlist_service->store( $playlist_dto, $this->user ) );
    }
}
