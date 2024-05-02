<?php

namespace App\QueryFilters\Playlists;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class SearchNamePlaylistFilter
{
    /**
     * Invoke the class instance.
     */
    public function __invoke( Builder $query, Closure $next ): Builder
    {
        $request = request();

        // Bail if there is no search query
        if ( ! $request->has( 'search' ) ) {
            return $next( $query );
        }

        $search = $request->input( 'search' );
        $query->where( 'name', 'LIKE', '%' . $search . '%' );

        return $next( $query );
    }
}
