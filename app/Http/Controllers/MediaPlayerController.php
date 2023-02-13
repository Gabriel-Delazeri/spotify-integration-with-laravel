<?php

namespace App\Http\Controllers;

use App\Http\Resources\SpotifyCurrentlyPlayingResource;

class MediaPlayerController extends Controller
{
    public function index()
    {
        $spotifyService = new \App\Services\SpotifyApiService();
        $currentlyPlaying = $spotifyService->getCurrentlyPlaying();

        return view('spotify.media-player', compact('currentlyPlaying'));
    }
}
