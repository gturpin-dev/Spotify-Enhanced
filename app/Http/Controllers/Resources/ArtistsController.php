<?php

namespace App\Http\Controllers\Resources;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistsCollection;
use App\Http\Resources\ArtistsResource;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ArtistsCollection( Artist::paginate( 100 ) );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ArtistsResource( Artist::findOrFail( $id ) );
    }
}
