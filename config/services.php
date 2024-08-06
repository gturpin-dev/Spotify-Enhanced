<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'github' => [
        'client_id'     => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect'      => env('GITHUB_REDIRECT_URI'),
    ],

    'spotify' => [
        'client_id'          => env('SPOTIFY_CLIENT_ID'),
        'client_secret'      => env('SPOTIFY_CLIENT_SECRET'),
        'redirect'           => env('SPOTIFY_REDIRECT_URI'),
        'authorize_endpoint' => 'https://accounts.spotify.com/authorize',
        'token_endpoint'     => 'https://accounts.spotify.com/api/token',
        'scopes'             => [
            'user-read-private',
            'user-read-email',
            'playlist-read-private',
            'playlist-read-collaborative',
            'playlist-modify-private',
            'playlist-modify-public',
        ],
    ],

    'consuming_passport' => [
        'client_id'              => env('PASSPORT_CONSUMING_CLIENT_ID'),
        'client_secret'          => env('PASSPORT_CONSUMING_CLIENT_SECRET'),
        'redirect_uri'           => config( 'app.url' ) . '/consuming-passport/auth/callback',
        'authorization_endpoint' => config( 'app.url' ) . '/oauth/authorize',
        'token_endpoint'         => config( 'app.url' ) . '/oauth/token',
    ],
];
