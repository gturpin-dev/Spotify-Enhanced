<?php

namespace App\Http\Controllers;

use App\Jobs\FetchUserSpotifyPlaylistsJob;
use App\Models\User;
use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function index()
    {

        (new FetchUserSpotifyPlaylistsJob(User::find(2)))->handle();
        // dd($playlists, 'PlaylistsController@index'); // @TODO implement the view
        return view('playlists.index');
    }
}
