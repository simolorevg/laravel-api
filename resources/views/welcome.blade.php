@extends('layouts.app')
@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center">
        @if (empty(Auth::user()->name))
            <h1>Login or register to make some projects</h1>
        @else
            <h1>Welcome to my portfolio {{ Auth::user()->name }}</h1>
            <p>Clicca sul menù in alto a destra.</p>
        @endif
    </div>
@endsection
