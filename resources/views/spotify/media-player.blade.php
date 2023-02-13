@extends('layouts.main')
@section('title','Media Player')
@section('content')
    <div class="container">
        <div class="" style="margin-top:150px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h3 class="text-primary">{{$currentlyPlaying['item']['name']}}</h3>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <img src='{{$currentlyPlaying['item']['album']['images'][0]['url']}}'
                             alt='Smiley face'
                             style='float:left'
                             class="img-thumbnail mb-4"
                        >
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6 text-center">
                            <a href='/previous-track' class="btn btn-primary text-center mt-4  text-primary" style="text-decoration:none">Música anterior</a>
                        </div>
                        <div class="col-sm-6 text-center">
                            <a href='/next-track' class="btn btn-primary text-center mt-4 text-primary" style="text-decoration:none">Próxima música</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
