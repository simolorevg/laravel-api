@extends('layouts.app')
@section('content')
    <h2 class="text-center">Crea un progetto</h2>
    <div class="my-container my-2">
        <form action="{{ route('admin.projects.store', 'admin.tecnologies.store') }}" method="POST"
            class="d-flex flex-column">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
            <label for="post">Post</label>
            <textarea name="post" id="post" cols="30" rows="10"></textarea>
            <label for="technologies">Tecnologie</label>
            @foreach ($technologies as $tech)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="technologies[]" id="tech-{{ $tech->id }}"
                        value="{{ $tech->id }}">
                    <label for="tech-{{ $tech->id }}">{{ $tech->typology }}</label>
                </div>
            @endforeach
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" value="{{ Auth::user()->name }}">
            <button type="submit" class="btn btn-primary my-3">INVIA</button>
        </form>
    </div>
@endsection
