<?php

namespace App\Jobs;

use App\DataObjects\Spotify\ArtistDTO;
use App\Models\Track;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use App\DataObjects\Spotify\TrackDTO;
use App\Models\Artist;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class StorePlaylistTrack implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected TrackDTO $track
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Store the artists only if they don't exist in the database
        $artists = collect( $this->track->artists )
            ->map( fn( ArtistDTO $artist ) => Artist::firstOrCreate( [
                'spotify_id' => $artist->spotify_id
            ], $artist->toArray() ) );

        // Store the track only if it doesn't exist in the database
        $track = Track::firstOrCreate( [
            'spotify_id' => $this->track->spotify_id
        ], [
            'spotify_id'  => $this->track->spotify_id,
            'name'        => $this->track->name,
            'duration_ms' => $this->track->duration_ms,
        ] );

        // Attach the artists to the track
        $track->artists()->sync( $artists->pluck( 'id' )->all() );
    }
}
