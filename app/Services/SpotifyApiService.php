<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SpotifyApiService
{
    /**
     * @var string|mixed
     */
    protected string $spotifyToken;

    public function __construct()
    {
        $this->spotifyToken = Session::get('spotify_token');
    }

    /**
     * @return mixed
     */
    public function getCurrentlyPlaying() : mixed
    {
        return Http::spotifyapi($this->spotifyToken)
            ->get('me/player/currently-playing')
            ->json();
    }

    /**
     * @return mixed
     */
    public function nextTrack() : mixed
    {
        return Http::spotifyapi($this->spotifyToken)
            ->post('/me/player/next')
            ->json();
    }

    /**
     * @return mixed
     */
    public function previousTrack() : mixed
    {
        return Http::spotifyapi($this->spotifyToken)
            ->post('/me/player/previous')
            ->json();
    }
}
