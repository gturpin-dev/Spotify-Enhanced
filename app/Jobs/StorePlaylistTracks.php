<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Jobs\StorePlaylistTrack;
use Illuminate\Support\Facades\Log;
use App\DataObjects\Spotify\TrackDTO;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Http\Integrations\Spotify\SpotifyConnector;
use App\Http\Integrations\Spotify\Requests\GetPlaylistTracksRequest;

class StorePlaylistTracks implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected User $user,
        protected string $playlist_id
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $connector = new SpotifyConnector( $this->user );
        $request   = new GetPlaylistTracksRequest( $this->playlist_id );
        $request
            ->paginate( $connector )
            ->collect()
            ->each( fn( TrackDTO $track ) => StorePlaylistTrack::dispatch( $track ) );
    }
}
