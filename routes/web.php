<?php

use App\DataObjects\Spotify\TrackDTO;
use App\Models\Playlist;
use App\Jobs\StorePlaylistTracks;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\GithubAuthController;
use App\Http\Controllers\SpotifyAuthController;
use App\Http\Integrations\ConsumingPassport\ConsumingPassportConnector;
use App\Http\Integrations\Spotify\SpotifyConnector;
use App\Http\Middleware\EnsureSpotifyAccountLinked;
use App\Http\Integrations\Spotify\Requests\GetPlaylistTracksRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\UrlHelper;

use function Pest\Laravel\post;

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
Route::get( '/consuming-passport/auth', function( Request $request ) {
    $connector         = new ConsumingPassportConnector( $request->user() );
    $authorization_url = $connector->getAuthorizationUrl();
    $state             = $connector->getState();

    $request->session()->put( 'state', $state );

    return redirect( $authorization_url );
} )->middleware( 'auth' );

Route::get( '/consuming-passport/auth/callback', function( Request $request ) {
    $current_user  = $request->user();
    $connector     = new ConsumingPassportConnector( $current_user );
    $authenticator = $connector->getAccessToken(
        code         : $request->input( 'code', '' ),
        state        : $request->input( 'state', '' ),
        expectedState: $request->session()->pull( 'state', '' ),
    );

    $current_user->storeConsumingPassportOAuthProvider( $authenticator );
} )->middleware( 'auth' );

Route::get( '/test', function() {
    $connector = new ConsumingPassportConnector( auth()->user() );

    dd(
        $connector
    );
});
