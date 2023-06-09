@extends('layouts.app')
@section('content')
    <h2>{{ $technology->typology }}</h2>
    <a class="btn btn-primary" href="{{ route('admin.technologies.index') }}">
        <i class="fa-solid fa-circle-left"></i> Torna Indietro
    </a>
@endsection
