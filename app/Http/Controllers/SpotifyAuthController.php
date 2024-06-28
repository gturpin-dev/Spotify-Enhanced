<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Jobs\FetchUserSpotifyPlaylistsJob;
use Laravel\Socialite\Contracts\User as SocialiteUser;

/**
 * The Auth from spotify can handle multiple cases
 * 1. The Registration of a new user via OAuth
 * 2. The login via OAuth
 * 3. The linking of a existing user with Spotify to get access to API
 */
class SpotifyAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::with('spotify')
            ->scopes(config('services.spotify.scopes', []))
            ->redirect();
    }

    public function handleProviderCallback()
    {
        $spotify_user = Socialite::driver('spotify')->user();

        // 3. The linking of a existing user with Spotify to get access to API
        if ( Auth::check() ) {
            $current_user = Auth::user();
            $this->link_spotify_account($current_user, $spotify_user);

            return to_route('profile.edit')
                ->with('success', __('Spotify account linked successfully'));
        }


        // 1. The Registration of a new user via OAuth
        // 2. The login via OAuth
        $current_user = User::firstOrCreate( [
            'oauth_provider_id' => $spotify_user->getId(),
        ], [
            'oauth_provider_id' => $spotify_user->getId(),
            'oauth_provider'    => 'spotify',
            'name'              => $spotify_user->getName(),
            'email'             => $spotify_user->getEmail(),
            'email_verified_at' => now(),
            'avatar'            => $spotify_user->getAvatar(),
            'password'          => bcrypt(Str::random(16)),   // Random password
        ]);

        $this->link_spotify_account($current_user, $spotify_user);

        Auth::login($current_user);

        return to_route('dashboard');
    }

    protected function link_spotify_account(User $user, SocialiteUser $spotify_user)
    {
        $user->spotify_id            = $spotify_user->getId();
        $user->spotify_token         = $spotify_user->token;
        $user->spotify_refresh_token = $spotify_user->refreshToken;
        $user->save();

        FetchUserSpotifyPlaylistsJob::dispatch( $user );
    }
}
