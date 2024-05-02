<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Spotify\PlaylistService;
use App\Jobs\FetchUserSpotifyPlaylistsJob;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class PlaylistsController extends Controller
{
    public function index()
    {
        return view( 'playlists.index' );
    }
}
