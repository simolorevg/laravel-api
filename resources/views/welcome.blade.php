@extends('layouts.app')
@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center">
        @if (empty(Auth::user()->name))
            <h1>Esegui il login o registrati</h1>
        @else
            <h1>Benvenuto nel tuo portfolio {{ Auth::user()->name }}</h1>
            <p>Clicca sul menù in alto a destra.</p>
        @endif
    </div>
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="{{ Vite::asset('resources\imgs\arte.png') }}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources\imgs\booleanmarket.png') }}" height="200" width="200"
                    alt="" />
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources\imgs\boolpizza.png') }}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources\imgs\booltrain.png') }}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources\imgs\boolvie.png') }}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources\imgs\array_calcio.png') }}" height="200" width="200"
                    alt="" />
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources\imgs\booltrainlogo2.png') }}" height="200" width="200"
                    alt="" />
            </div>
        </div>
    </div>
@endsection
