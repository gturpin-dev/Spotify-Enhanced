<?php

namespace App\Http\Integrations\Spotify\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Http\Connector;
use Saloon\PaginationPlugin\Paginator;
use App\DataObjects\Spotify\PlaylistDTO;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use App\Http\Integrations\Spotify\Paginations\PlaylistsPaginator;

class GetAllUserPlaylistsRequest extends Request implements Paginatable, HasRequestPagination
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

    public function paginate(Connector $connector): Paginator
    {
        return new PlaylistsPaginator(
            connector: $connector,
            request  : $this
        );
    }

    /**
     * @return array<PlaylistDTO>
     */
    public function createDtoFromResponse(Response $response): array
    {
        return $response->collect( 'items' )
            ->map( fn( array $playlist ) => PlaylistDTO::from( $playlist ) )
            ->all();
    }
}
