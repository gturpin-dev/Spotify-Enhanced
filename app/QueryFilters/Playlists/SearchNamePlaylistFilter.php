<?php

namespace App\QueryFilters\Playlists;

use Closure;
use Illuminate\Database\Query\Builder;

class SearchNamePlaylistFilter
{
    public function __construct(
        protected ?string $search = null
    ) {
        $this->search ??= request()->input( 'search' );
    }

    /**
     * Invoke the class instance.
     */
    public function __invoke( Builder $query, Closure $next ): Builder
    {
        // Apply only if the search is not empty
        if ( ! is_null( $this->search ) && ! empty( $this->search ) ) {
            $query->search( 'name', $this->search );
        }

        return $next( $query );
    }
}
