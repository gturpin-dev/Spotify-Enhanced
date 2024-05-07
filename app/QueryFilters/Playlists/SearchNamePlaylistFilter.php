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
        // Bail if the search is empty
        if ( is_null( $this->search ) || empty( $this->search ) ) {
            return $next( $query );
        }

        // Apply the filter
        $query->search( 'name', $this->search );

        return $next( $query );
    }
}
