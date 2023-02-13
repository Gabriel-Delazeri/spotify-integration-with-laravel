<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SpotifyAuthService;
use Illuminate\Http\Request;

class SpotifyCallbackController extends Controller
{
    public function __construct(
        protected SpotifyAuthService $spotifyAuthService
    )
    {

    }

    public function callback(Request $request)
    {
        return $this->spotifyAuthService->auth($request->input('code'));
    }

}
