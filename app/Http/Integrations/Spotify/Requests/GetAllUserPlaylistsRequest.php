<?php

namespace App\Http\Integrations\Spotify\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class GetAllUserPlaylistsRequest extends Request implements Paginatable
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly string $user_spotify_id
    ) {}

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/users/' . $this->user_spotify_id . '/playlists';
    }
}
