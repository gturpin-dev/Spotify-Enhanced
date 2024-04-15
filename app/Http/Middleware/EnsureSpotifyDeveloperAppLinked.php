<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * This middleware ensures that the user has linked their Spotify account.
 * The spotify account must be a developer account to access the Spotify API.
 */
class EnsureSpotifyDeveloperAppLinked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( ! $request->user()->isSpotifyDeveloperAppLinked() ) {
            return to_route('profile.edit')
                ->with('error', 'Please link your Spotify account to continue.');
        }

        return $next($request);
    }
}
