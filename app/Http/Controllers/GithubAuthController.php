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
        $user = Socialite::driver('github')->user();
        $user = User::firstOrCreate([
            'github_id' => $user->getId()
        ], [
            'github_id'            => $user->getId(),
            'name'                 => $user->getName(),
            'email'                => $user->getEmail(),
            'email_verified_at'    => now(),
            'avatar'               => $user->getAvatar(),
            'github_token'         => $user->token,
            'github_refresh_token' => $user->refreshToken,
            'password'             => bcrypt(Str::random(16)), // Random password
        ]);

        Auth::login($user);

        return to_route('dashboard');
    }
}
