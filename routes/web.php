<?php

use App\Http\Controllers\Api\SpotifyCallbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/media-player', [\App\Http\Controllers\MediaPlayerController::class, 'index']);

// TODO fix that routes
Route::get('/next-track', function(){
    $spotifyService = new \App\Services\SpotifyApiService();
    $spotifyService->nextTrack();

    return redirect('/media-player');
});
Route::get('/previous-track', function(){
    $spotifyService = new \App\Services\SpotifyApiService();
    $spotifyService->previousTrack();

    return redirect('/media-player');
});

Route::get('callback', [SpotifyCallbackController::class, 'callback']);
