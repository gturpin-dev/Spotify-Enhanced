<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Console\Commands\DispatchUserSpotifyPlaylistsFetchCommand;

Schedule::command(DispatchUserSpotifyPlaylistsFetchCommand::class)
    ->dailyAt('03:00');
