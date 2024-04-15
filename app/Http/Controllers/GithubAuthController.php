<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $github_user = Socialite::driver('github')->user();
        $user        = User::firstOrCreate( [
            'oauth_provider_id' => $github_user->getId(),
        ], [
            'oauth_provider_id' => $github_user->getId(),
            'oauth_provider'    => 'github',
            'name'              => $github_user->getName(),
            'email'             => $github_user->getEmail(),
            'email_verified_at' => now(),
            'avatar'            => $github_user->getAvatar(),
            'password'          => bcrypt(Str::random(16)),   // Random password
        ]);

        Auth::login($user);

        return to_route('dashboard');
    }
}
