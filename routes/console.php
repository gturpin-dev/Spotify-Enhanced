<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Console\Commands\DispatchUserSpotifyPlaylistsFetchCommand;
use App\Console\Commands\DispatchUserSpotifyPlaylistsTracksFetchCommand;

Schedule::command(DispatchUserSpotifyPlaylistsFetchCommand::class)
    ->dailyAt('03:00');

Schedule::command(DispatchUserSpotifyPlaylistsTracksFetchCommand::class)
    ->dailyAt('04:00');
