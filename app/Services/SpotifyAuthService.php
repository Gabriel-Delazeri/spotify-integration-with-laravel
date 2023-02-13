<?php

namespace App\Services;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SpotifyAuthService
{
    /**
     * @return string
     */
    public function getOAuthUrl() : string
    {
        return 'https://accounts.spotify.com/authorize?' . http_build_query(config('spotifyoauth2'));
    }

    public function auth($code)
    {
        $authData = config('spotifyoauth2');
        $authData['code'] = $code;

        try {
            $response = Http::spotifyoauth2(http_build_query($authData))
                ->post('')
                ->json();

            Session::put('spotify_token', $response['access_token']);

            return redirect('/media-player');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            // TODO add messages
            return redirect('/');
        }
    }
}
