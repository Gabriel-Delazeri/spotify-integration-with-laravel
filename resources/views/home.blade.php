@extends('layouts.main')
@section('title', 'Home Page')
@section('content')
    <div class="container-fluid vh-100" style="margin-top:300px">
        <div class="" style="margin-top:200px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-3 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h3 class="text-primary">Spotify Web Player</h3>
                    </div>
                    <div class="text-center mt-4">
                        <span class="subtext">De o play nas suas músicas!</span>
                    </div>
                    <div class="text-center mt-2">
                        <a class="btn btn-primary text-center mt-4"
                           type="submit"
                           href="{{$oauthUrl}}">
                            Logar com Spotify
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
