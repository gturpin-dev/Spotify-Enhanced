<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\DataObjects\Spotify\PlaylistDTO;
use App\Http\Integrations\Spotify\Requests\GetAllUserPlaylistsRequest;
use App\Http\Integrations\Spotify\SpotifyConnector;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\Spotify\PlaylistService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

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
    public function handle( PlaylistService $playlist_service ): void
    {
        $spotify_connector = new SpotifyConnector( $this->user );
        $request           = new GetAllUserPlaylistsRequest( $this->user->spotify_id );
        $request->paginate( $spotify_connector )
            ->collect()
            ->each( fn( PlaylistDTO $playlist_dto ) => $playlist_service->store( $playlist_dto, $this->user ) );
    }
}
