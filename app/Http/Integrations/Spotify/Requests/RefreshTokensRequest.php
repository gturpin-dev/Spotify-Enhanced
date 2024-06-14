<?php

namespace App\Http\Integrations\Spotify\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Body\HasFormBody;
use Saloon\Http\Auth\BasicAuthenticator;
use App\DataObjects\Spotify\OAuthDetailsDTO;

class RefreshTokensRequest extends Request implements HasBody
{
    use HasFormBody;

    public function __construct(
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
        return config( 'services.spotify.token_endpoint' );
    }

    protected function defaultBody(): array
    {
        return [
            'grant_type'    => 'refresh_token',
            'refresh_token' => $this->refresh_token,
            'client_id'     => config('services.spotify.client_id'),
        ];
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new BasicAuthenticator(
            config('services.spotify.client_id'),
            config('services.spotify.client_secret')
        );
    }

    public function createDtoFromResponse(Response $response): OAuthDetailsDTO
    {
        return OAuthDetailsDTO::from( $response->json() );
    }
}
