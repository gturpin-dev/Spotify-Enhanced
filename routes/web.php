<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\GithubAuthController;
use App\Http\Middleware\EnsureSpotifyDeveloperAppLinked;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', EnsureSpotifyDeveloperAppLinked::class])
    ->prefix('playlists')
    ->name('playlists.')
    ->group(function () {
        Route::get('/', [ PlaylistsController::class, 'index' ])->name('index');
});

Route::middleware('guest')->group(function () {
    Route::get('/auth/github/redirect', [GithubAuthController::class, 'redirectToProvider'])->name('auth.github');
    Route::get('/auth/github/callback', [GithubAuthController::class, 'handleProviderCallback']);
});

require __DIR__.'/auth.php';
