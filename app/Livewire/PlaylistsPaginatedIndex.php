<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class PlaylistsPaginatedIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        return view( 'livewire.playlists-paginated-index', [
            'playlists' => Auth::user()->playlists()
                ->orderBy( 'name' )
                ->paginate( 15 )
        ] );
    }
}
