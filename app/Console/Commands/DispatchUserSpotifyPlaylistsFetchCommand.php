<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Jobs\FetchUserSpotifyPlaylistsJob;
use App\Services\Api\Spotify\SpotifyApiWrapper;
use App\Services\Spotify\PlaylistService;

class DispatchUserSpotifyPlaylistsFetchCommand extends Command
{
    protected const CHUNK_SIZE       = 10;
    protected const DELAY_IN_MINUTES = 5;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dispatch-user-spotify-playlists-fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch jobs to fetch spotify playlists for all users to avoid API Rate limits';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Start dispatching jobs to fetch spotify playlists');

        $users        = User::WithSpotifyAccountLinked()->get();
        $progress_bar = $this->output->createProgressBar($users->count());

        $users->chunk(self::CHUNK_SIZE)
            ->reduce( function( int $accumulated_delay, $chunk ) use ( $progress_bar ) {
                $chunk->each( function( User $user ) use ( $progress_bar, &$accumulated_delay ) {
                    FetchUserSpotifyPlaylistsJob::dispatch( $user )
                        ->delay( now()->addMinutes( $accumulated_delay ) );
                    $progress_bar->advance();
                });

                return $accumulated_delay + self::DELAY_IN_MINUTES;
            }, 0 );

        $progress_bar->finish();
        $this->info("\n All jobs dispatched");
    }
}
