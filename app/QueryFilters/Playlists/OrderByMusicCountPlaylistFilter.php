<?php

namespace App\QueryFilters\Playlists;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class OrderByMusicCountPlaylistFilter
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
        if ( $orderby !== 'music_count' ) {
            return $next( $query );
        }

        // @TODO Implement the order by music count

        return $next( $query );
    }
}
