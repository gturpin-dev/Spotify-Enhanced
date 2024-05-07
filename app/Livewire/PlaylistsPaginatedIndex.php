<?php

namespace App\Livewire;

use App\Models\Playlist;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Pipeline;
use Illuminate\Pagination\LengthAwarePaginator;
use App\QueryFilters\Playlists\SearchNamePlaylistFilter;
use App\QueryFilters\Playlists\OrderByMusicCountPlaylistFilter;
use App\QueryFilters\Playlists\OrderByPlaylistNamePlaylistFilter;
use Livewire\Attributes\Url;

class PlaylistsPaginatedIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    #[Url]
    public ?string $search = '';

    #[Url(as: 'orderby', keep: true)]
    public string $sortField = 'name';

    #[Url(as: 'order', keep: true)]
    public string $sortDirection = 'ASC';

    public function render()
    {
        $query = User::current()->playlists()->getBaseQuery();
        $query = Pipeline::send( $query )
            ->through( [
                new SearchNamePlaylistFilter( $this->search ),
                new OrderByMusicCountPlaylistFilter( $this->sortDirection ),
                new OrderByPlaylistNamePlaylistFilter( $this->sortDirection ),
            ] )
            ->thenReturn();

        return view( 'livewire.playlists-paginated-index', [
            'playlists' => $query->paginate( 15 ),
        ] );
    }

    /**
     * Sort the playlists by the given field
     * It will reverse the direction when the field is the same
     *
     * @param string $field_name the field name to sort by
     */
    public function sortBy( string $field_name ): void
    {
        // Reset the direction to default if the field is different
        $this->sortDirection = ( $this->sortField !== $field_name )
            ? 'ASC'
            : ( $this->sortDirection === 'ASC' ? 'DESC' : 'ASC' );

        $this->sortField = $field_name;
    }
}
