<?php

namespace App\Http\Controllers;

use App\Services\SpotifyAuthService;

class HomeController extends Controller
{
    public function __construct(protected SpotifyAuthService $authService)
    {
    }

    public function index()
    {
        $oauthUrl = $this->authService->getOAuthUrl();

        return view('home', compact('oauthUrl'));
    }
}
