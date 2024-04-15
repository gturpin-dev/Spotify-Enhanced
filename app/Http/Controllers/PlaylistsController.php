<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function index()
    {
        dd('PlaylistsController@index'); // @TODO implement the view
        return view('playlists.index');
    }
}
