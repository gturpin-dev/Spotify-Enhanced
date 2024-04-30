<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Spotify\PlaylistService;
use App\Jobs\FetchUserSpotifyPlaylistsJob;

class PlaylistsController extends Controller
{
    public function index()
    {

        FetchUserSpotifyPlaylistsJob::dispatch(User::find(2), app( PlaylistService::class ) );
        // dd($playlists, 'PlaylistsController@index'); // @TODO implement the view
        return view('playlists.index');
    }
}
