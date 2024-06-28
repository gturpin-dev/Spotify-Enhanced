<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Playlist;
use Illuminate\Console\Command;
use App\Jobs\StorePlaylistTracks;

class DispatchUserSpotifyPlaylistsTracksFetchCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dispatch-user-spotify-playlists-tracks-fetch-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch jobs to fetch spotify tracks from all users playlists to avoid API Rate limits';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Start dispatching jobs to fetch spotify tracks');

        User::WithSpotifyAccountLinked()
            ->get()
            ->each( function( User $user ) {
                $user->playlists()
                    ->get()
                    ->each( fn( Playlist $playlist ) => StorePlaylistTracks::dispatch( $user, $playlist->spotify_id ) );
            } );

        $this->info("\n All jobs dispatched");
    }
}
