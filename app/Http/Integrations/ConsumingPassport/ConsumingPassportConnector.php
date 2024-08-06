<?php

namespace App\Http\Integrations\ConsumingPassport;

use App\Models\User;
use Saloon\Contracts\Authenticator;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
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
