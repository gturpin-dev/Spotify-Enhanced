<?php

use App\Http\Controllers\ConsumingPassportAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\GithubAuthController;
use App\Http\Controllers\SpotifyAuthController;
use App\Http\Integrations\ConsumingPassport\ConsumingPassportConnector;
use App\Http\Middleware\EnsureSpotifyAccountLinked;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')
    ->controller(ProfileController::class)
    ->prefix('profile')
    ->name('profile.')
    ->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });

Route::middleware(['auth', EnsureSpotifyAccountLinked::class])
    ->group(function () {
        Route::get('/my-playlists', [ PlaylistsController::class, 'index' ] )->name('playlists.index');
    });

Route::middleware('guest')->group(function () {
    Route::get('/auth/github', [GithubAuthController::class, 'redirectToProvider'])->name('auth.github');
    Route::get('/auth/github/callback', [GithubAuthController::class, 'handleProviderCallback']);
});

Route::get('/auth/spotify', [SpotifyAuthController::class, 'redirectToProvider'])->name('auth.spotify');
Route::get('/auth/spotify/callback', [SpotifyAuthController::class, 'handleProviderCallback']);

require __DIR__.'/auth.php';


/**
 * Tests the passport from client side application
 */
Route::get( '/consuming-passport/auth', [ConsumingPassportAuthController::class, 'redirectToProvider'] )->middleware( 'auth' );
Route::get( '/consuming-passport/auth/callback', [ConsumingPassportAuthController::class, 'handleProviderCallback'] )->middleware( 'auth' );

Route::get( '/test', function() {
    $connector = new ConsumingPassportConnector( auth()->user() );

    dd(
        $connector
    );
});
