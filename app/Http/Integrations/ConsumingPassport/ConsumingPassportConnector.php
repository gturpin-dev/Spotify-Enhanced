<?php

namespace App\Http\Integrations\ConsumingPassport;

use App\Models\User;
use Saloon\Contracts\Authenticator;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use Saloon\Traits\Plugins\AcceptsJson;

class ConsumingPassportConnector extends Connector
{
    use AcceptsJson;
    use AuthorizationCodeGrant;

    public ?int $tries = 3;
    public ?int $retryInterval = 100;

    public function __construct(
        protected User $user,
    ) {}

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config( 'app.url' ) . '/api/v1';
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator( $this->user->getConsumingPassportOAuthProvider()->getAccessToken() );
    }

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
        $new_authenticator = $this->refreshAccessToken( $this->user->getConsumingPassportOAuthProvider()->getRefreshToken() );
        $this->authenticate( $new_authenticator );
        $this->user->storeConsumingPassportOAuthProvider( $new_authenticator );
    }

    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [];
    }

    /**
     * The OAuth configuration
     */
    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId( config( 'services.consuming_passport.client_id' ) )
            ->setClientSecret( config( 'services.consuming_passport.client_secret' ) )
            ->setRedirectUri( config( 'services.consuming_passport.redirect_uri' ) )
            ->setDefaultScopes( [] )
            ->setAuthorizeEndpoint( config( 'services.consuming_passport.authorization_endpoint' ) )
            ->setTokenEndpoint( config( 'services.consuming_passport.token_endpoint' ) );
    }
}
