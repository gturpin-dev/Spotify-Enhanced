<?php

use App\Http\Controllers\Resources\ArtistsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;
use LaravelJsonApi\Laravel\Routing\Relationships;
use LaravelJsonApi\Laravel\Routing\ResourceRegistrar;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('artists', ArtistsController::class)
    ->middleware('auth:api')
    ->only([
        'index',
        'show'
    ]);

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->name('api:v1')
    // ->middleware('auth:api')
    ->resources(function ( ResourceRegistrar $server) {
        $server->resource('artists', JsonApiController::class)
            ->readOnly()
            ->relationships(function ( Relationships $relations ) {
                $relations->hasMany('tracks')->readOnly();
            });

        $server->resource('tracks', JsonApiController::class)
            ->readOnly()
            ->relationships(function ( Relationships $relations ) {
                $relations->hasMany('artists')->readOnly();
            });
    });
