<?php

namespace App\Http\Controllers;

use App\Jobs\FetchUserSpotifyPlaylists;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Api\Spotify\SpotifyApiWrapper;

class PlaylistsController extends Controller
{
    public function index()
    {

        (new FetchUserSpotifyPlaylists(User::find(12)))->handle();
        // dd($playlists, 'PlaylistsController@index'); // @TODO implement the view
        return view('playlists.index');
    }
}
