<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use App\Services\Api\Spotify\SpotifyApiWrapper;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use SocialiteProviders\Manager\SocialiteWasCalled;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Extends Socialite with Other providers
        Event::listen( function ( SocialiteWasCalled $event ) {
            $event->extendSocialite( 'spotify', \SocialiteProviders\Spotify\Provider::class );
        } );

        // Add method "search" for the Query Builder
        Builder::macro( 'search', function ( string $field, string $search ) {
            return $this->where( $field, 'LIKE', '%' . $search . '%' );
        } );
    }
}
