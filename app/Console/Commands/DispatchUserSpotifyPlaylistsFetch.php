<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Jobs\FetchUserSpotifyPlaylists;

class DispatchUserSpotifyPlaylistsFetch extends Command
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
        User::WithSpotifyAccountLinked()->get()
            ->chunk(self::CHUNK_SIZE)
            ->reduce( function( int $accumulated_delay, $chunk ) {
                $chunk->each(fn(User $user) => FetchUserSpotifyPlaylists::dispatch($user)
                    ->delay(now()->addMinutes($accumulated_delay)));

                return $accumulated_delay + self::DELAY_IN_MINUTES;
            }, 0 );
    }
}
