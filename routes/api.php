<?php

use App\Http\Controllers\Resources\ArtistsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('artists', ArtistsController::class)
    // ->middleware('auth:api')
    ->only([
        'index',
        'show'
    ]);
