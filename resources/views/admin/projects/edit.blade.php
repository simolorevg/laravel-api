@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="my-container my-3">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="d-flex flex-column">
                @csrf
                @method('PUT')
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
                <input type="text" name="title" id="title" placeholder="Titolo" value="{{ $project->title }}">
                <label for="post">Post</label>
                <textarea name="post" id="post" value="{{ $project->post }}" cols="30" rows="10"></textarea>
                @foreach ($technologies as $tech)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="technologies[]" id="tech-{{ $tech->id }}"
                            value="{{ $tech->id }}">
                        <label for="tech-{{ $tech->id }}">{{ $tech->typology }}</label>
                    </div>
                @endforeach
                <label for="author">Autore</label>
                <input type="text" name="author" id="author" value="{{ $project->author }}">
                <button type="submit" class="btn btn-primary my-3">INVIA</button>
            </form>
        </div>
    </div>
@endsection
