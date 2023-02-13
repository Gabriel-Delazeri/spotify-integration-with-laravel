<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Http::macro('spotifyapi', function($token) {
            return Http::acceptJson()
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $token,
                ])
                ->baseUrl(config('spotifyapi.base_url'))
                ->retry(3, 100);
        });

        Http::macro('spotifyoauth2', function($body) {
            return Http::acceptJson()
                ->withHeaders([
                    'Authorization: Basic ' . base64_encode( config('spotifyapi.client_id') . ':' . config('spotifyapi.client_secret') )
                ])
                ->withBody($body, 'application/x-www-form-urlencoded')
                ->baseUrl(config('spotifyapi.auth_base_url'))
                ->retry(3, 100);
        });
    }
}
