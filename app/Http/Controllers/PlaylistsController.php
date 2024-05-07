<?php

namespace App\Http\Controllers;

class PlaylistsController extends Controller
{
    public function index()
    {
        return view( 'playlists.index' );
    }
}
