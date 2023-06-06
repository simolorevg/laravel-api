@extends('layouts.app')
@section('content')
    <h2 class="text-center">Crea un post</h2>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
        <label for="post">Post</label>
        <input type="text" name="post" id="post">
        <label for="author">Autore</label>
        <input type="text" name="author" id="author" value="{{ Auth::user()->name }}">
        <button type="submit" class="btn btn-primary">INVIA</button>
    </form>
@endsection