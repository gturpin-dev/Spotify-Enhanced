<?php

namespace App\Http\Integrations\Spotify\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Body\HasFormBody;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Auth\BasicAuthenticator;

class RefreshTokensRequest extends Request implements HasBody
{
    use HasFormBody;

    public function __construct(
        protected readonly OAuthConfig $oauth_config,
        protected readonly string $refresh_token
    ) {}

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return $this->oauth_config->getTokenEndpoint();
    }

    protected function defaultBody(): array
    {
        return [
            'grant_type'    => 'refresh_token',
            'refresh_token' => $this->refresh_token,
            'client_id'     => $this->oauth_config->getClientId(),
        ];
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new BasicAuthenticator(
            $this->oauth_config->getClientId(),
            $this->oauth_config->getClientSecret()
        );
    }
}
