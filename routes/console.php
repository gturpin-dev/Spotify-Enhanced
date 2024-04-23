<?php

use App\Console\Commands\DispatchUserSpotifyPlaylistsFetch;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Schedule::command(DispatchUserSpotifyPlaylistsFetch::class)
    ->dailyAt('03:00');
