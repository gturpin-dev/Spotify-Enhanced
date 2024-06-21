<?php

namespace App\Http\Integrations\Spotify\Paginations;

use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\OffsetPaginator;

final class PlaylistTracksPaginator extends OffsetPaginator
{
    protected ?int $perPageLimit = 100;

    protected function isLastPage(Response $response): bool
    {
        return is_null( $response->json('next') );
    }

    protected function getPageItems(Response $response, Request $request): array
    {
        return $response->dto();
    }
}
