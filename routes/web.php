<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\GithubAuthController;
use App\Http\Controllers\SpotifyAuthController;
use App\Http\Integrations\Spotify\Requests\GetAllUserPlaylistsRequest;
use App\Http\Integrations\Spotify\SpotifyConnector;
use App\Http\Middleware\EnsureSpotifyAccountLinked;

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


Route::get('test', function () {
    $current_user      = auth()->user();
    $spotify_connector = new SpotifyConnector( $current_user );
    $paginator         = $spotify_connector->paginate( new GetAllUserPlaylistsRequest( $current_user->spotify_id ) );
    $playlists         = iterator_to_array( $paginator->items() );

    dd(
        $playlists
    );

    return 'Hello World';
});
