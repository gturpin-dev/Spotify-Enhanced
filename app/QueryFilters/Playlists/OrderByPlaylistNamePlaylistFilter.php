<?php

namespace App\QueryFilters\Playlists;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class OrderByPlaylistNamePlaylistFilter
{
    /**
     * Invoke the class instance.
     */
    public function __invoke( Builder $query, Closure $next ): Builder
    {
        $request = request();
        $orderby = $request->input( 'orderby' );
        $order   = $request->input( 'order' ) === 'DESC' ? 'DESC' : 'ASC';

        // Bail if there is no order by query
        if ( $orderby !== 'name' ) {
            return $next( $query );
        }

        $query->orderBy( 'name', $order );

        return $next( $query );
    }
}
