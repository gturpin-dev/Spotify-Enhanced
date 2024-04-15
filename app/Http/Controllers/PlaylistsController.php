<?php

namespace App\Http\Controllers;

use App\Services\Api\Spotify\SpotifyApiWrapper;
use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function index()
    {
        $wrapper   = new SpotifyApiWrapper;
        $playlists = $wrapper->get_playlists();

        dd($playlists, 'PlaylistsController@index'); // @TODO implement the view
        return view('playlists.index');
    }
}
