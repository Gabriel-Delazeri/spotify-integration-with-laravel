<?php

return [
    'client_id' => env('SPOTIFY_CLIENT_ID', ''),
    'client_secret' => env('SPOTIFY_CLIENT_SECRET', ''),
    'scope' => env('SPOTIFY_SCOPE', ''),
    'redirect_uri' => env('SPOTIFY_REDIRECT_URL', ''),
    'response_type' => 'code',
    'grant_type'   => 'authorization_code',
];
