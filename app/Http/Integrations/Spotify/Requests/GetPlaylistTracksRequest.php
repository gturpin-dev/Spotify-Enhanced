<?php

namespace App\Http\Integrations\Spotify\Requests;

use App\DataObjects\Spotify\TrackDTO;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Connector;
use Saloon\PaginationPlugin\Paginator;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use App\Http\Integrations\Spotify\Paginations\PlaylistTracksPaginator;
use Saloon\Http\Response;

class GetPlaylistTracksRequest extends Request implements Paginatable, HasRequestPagination
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(
        protected readonly string $playlist_id
    ) {}

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/playlists/' . $this->playlist_id . '/tracks';
    }

    public function paginate(Connector $connector): Paginator
    {
        return new PlaylistTracksPaginator(
            connector: $connector,
            request  : $this
        );
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->collect( 'items' )
            ->filter( fn( array $track ) => data_get( $track, 'track.type' ) === 'track' )
            ->map( function( array $track ) {
                try {
                    return TrackDTO::from( $track );
                } catch ( \TypeError $e ) {
                    return null; // Skip the track if it's not a valid track
                }
            } )
            ->filter()
            ->all();
    }
}
