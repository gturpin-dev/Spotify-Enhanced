<?php

namespace App\Http\Integrations\Spotify\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use App\DataObjects\Spotify\PlaylistDTO;
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

    /**
     * @return array<PlaylistDTO>
     */
    public function createDtoFromResponse(Response $response): array
    {
        return array_map( fn( array $playlist ) => PlaylistDTO::from( $playlist ), $response->json( 'items', [] ) );
    }
}
