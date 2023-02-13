<?php

return [
    'base_url' => env('SPOTIFYAPI_BASE_URL', 'https://api.spotify.com/v1'),
    'redirect_url' => env('SPOTIFY_REDIRECT_URL', ''),
    'client_id' => env('SPOTIFY_CLIENT_ID', ''),
    'client_secret' => env('SPOTIFY_CLIENT_SECRET', ''),
    'auth_base_url' => 'https://accounts.spotify.com/api/token',
    'response_type' => 'code',
];
