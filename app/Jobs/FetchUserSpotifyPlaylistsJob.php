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
        protected User $user,
    ) {
        //
    }

    /**
     * Execute the job.
     */
        public function handle( PlaylistService $playlist_service, SpotifyApiWrapper $spotify_api_wrapper  ): void
    {
        $spotify_api_wrapper->act_as( $this->user );

        collect( $spotify_api_wrapper->get_playlists() )
            ->map( fn( array $playlist ) => PlaylistDTO::from( $playlist ) )
            ->each( fn( PlaylistDTO $playlist_dto ) => $playlist_service->store( $playlist_dto, $this->user ) );
    }
}
