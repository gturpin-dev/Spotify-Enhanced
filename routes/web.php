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
use App\Http\Integrations\Spotify\SpotifyConnector;
use App\Http\Middleware\EnsureSpotifyAccountLinked;
use App\Http\Integrations\Spotify\Requests\GetPlaylistTracksRequest;
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
    $request->session()->put( 'api-state', $state = $request->fingerprint() );

    $query_string = http_build_query( [
        'client_id'     => env( 'PASSPORT_CONSUMING_CLIENT_ID' ),
        'redirect_uri'  => env( 'PASSPORT_CONSUMING_REDIRECT_URI' ),
        'response_type' => 'code',
        'scope'         => '',
        'state'         => $state,
    ] );

    return redirect( env( 'PASSPORT_CONSUMING_AUTHORIZATION_URL' ) . '?' . $query_string );
} );

Route::get( '/consuming-passport/auth/callback', function( Request $request ) {
    $state = $request->session()->pull( 'api-state' );

    throw_unless(
        ! empty( $state ) && $state === $request->input( 'state' ),
        InvalidArgumentException::class,
        'Invalid state value.'
    );

    $response = Http::asForm()->post( env( 'PASSPORT_CONSUMING_TOKEN_URL' ), [
        'grant_type'    => 'authorization_code',
        'client_id'     => env( 'PASSPORT_CONSUMING_CLIENT_ID' ),
        'client_secret' => env( 'PASSPORT_CONSUMING_CLIENT_SECRET' ),
        'redirect_uri'  => env( 'PASSPORT_CONSUMING_REDIRECT_URI' ),
        'code'          => $request->input( 'code' ),
    ] );

    /**
     * If need to refresh tokens
     */
    // $response = Http::asForm()->post('http://passport-app.test/oauth/token', [
    //     'grant_type' => 'refresh_token',
    //     'refresh_token' => 'the-refresh-token',
    //     'client_id' => 'client-id',
    //     'client_secret' => 'client-secret',
    //     'scope' => '',
    // ]);

    return $response->json();
} );
