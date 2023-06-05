@extends('layouts.app')
@section('content')
    <h2>{{ $project->title }}</h2>
    <h5>{{ $project->author }}</h5>
    <p>
        {{ $project->post }}
    </p>
    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">
        <i class="fa-solid fa-circle-left"></i> Torna Indietro
    </a>
@endsection
