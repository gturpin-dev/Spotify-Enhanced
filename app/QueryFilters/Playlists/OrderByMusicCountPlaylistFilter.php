<?php

namespace App\QueryFilters\Playlists;

use Closure;
use Illuminate\Database\Query\Builder;

class OrderByMusicCountPlaylistFilter
{
    public function __construct(
        protected ?string $order = null
    ) {
        $this->order ??= request()->input( 'order' );
    }

    /**
     * Invoke the class instance.
     */
    public function __invoke( Builder $query, Closure $next ): Builder
    {
        // Bail if the order is empty
        if ( is_null( $this->order ) || empty( $this->order ) ) {
            return $next( $query );
        }

        // Apply the filter
        // $query->orderBy( 'music_count', $this->order );
        // @TODO to implement

        return $next( $query );
    }
}
