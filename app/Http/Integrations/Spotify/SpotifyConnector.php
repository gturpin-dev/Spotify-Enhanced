<?php

namespace App\Http\Integrations\Spotify;

use Saloon\Http\Request;
use Saloon\Http\Connector;
use Saloon\Contracts\Authenticator;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\PaginationPlugin\Paginator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use App\Http\Integrations\Spotify\Requests\RefreshTokensRequest;
use App\Http\Integrations\Spotify\Paginations\PlaylistsPaginator;
use App\Models\User;

class SpotifyConnector extends Connector implements HasPagination
{
    use AuthorizationCodeGrant;
    use AcceptsJson;

    public ?int $tries = 3;
    public ?int $retryInterval = 100;

    public function __construct(
        protected User $user,
    ) {}

    /**
     * The Base URL of the API.
     */
    public function resolveBaseUrl(): string
    {
        return 'https://api.spotify.com/v1';
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator( $this->user->spotify_token );
    }

    /**
     * Handle out of date token errors and refresh on the fly
     */
    public function handleRetry(FatalRequestException|RequestException $exception, Request $request): bool
    {
        // Handle only out-of-date token errors
        if ( ! $exception instanceof RequestException ) return false;
        if ( $exception->getResponse()->status() !== 401 ) return false;

        $this->refresh_tokens();

        return true;
    }

    /**
     * Refresh the tokens for the connector and update the user
     */
    protected function refresh_tokens(): void {
        $new_authenticator = $this->refreshAccessToken( $this->user->spotify_refresh_token );
        $this->authenticate( $new_authenticator );

        $this->user->update([
            'spotify_token'         => $new_authenticator->getAccessToken(),
            'spotify_refresh_token' => $new_authenticator->getRefreshToken() ?? $this->user->spotify_refresh_token,
        ]);
    }

    protected function resolveRefreshTokenRequest(OAuthConfig $oauthConfig, string $refreshToken): Request
    {
        return new RefreshTokensRequest( $oauthConfig, $refreshToken );
    }

    public function paginate(Request $request): Paginator
    {
        return new PlaylistsPaginator(
            connector: $this,
            request  : $request
        );
    }

    /**
     * The OAuth2 configuration
     */
    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId( config( 'services.spotify.client_id' ) )
            ->setClientSecret( config( 'services.spotify.client_secret' ) )
            ->setRedirectUri( config( 'services.spotify.redirect' ) )
            ->setDefaultScopes( config( 'services.spotify.scopes' ) )
            ->setAuthorizeEndpoint( config( 'services.spotify.authorize_endpoint' ) )
            ->setTokenEndpoint( config( 'services.spotify.token_endpoint' ) );
    }
}
