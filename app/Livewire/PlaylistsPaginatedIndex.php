<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Pipeline;
use App\QueryFilters\Playlists\SearchNamePlaylistFilter;
use App\QueryFilters\Playlists\OrderByMusicCountPlaylistFilter;
use App\QueryFilters\Playlists\OrderByPlaylistNamePlaylistFilter;

class PlaylistsPaginatedIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $query = User::current()->playlists()->getQuery();
        $query = Pipeline::send( $query )
            ->through( [
                SearchNamePlaylistFilter::class,
                OrderByMusicCountPlaylistFilter::class,
                OrderByPlaylistNamePlaylistFilter::class,
            ] )
            ->thenReturn();

        return view( 'livewire.playlists-paginated-index', [
            'playlists' => $query->paginate( 15 )
        ] );
    }
}
