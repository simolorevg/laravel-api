@extends('layouts.app')
@section('content')
    <h2>Pagina index posts</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Post</th>
                <th scope="col">Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->post }}</td>
                    <td>{{ $project->author }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
