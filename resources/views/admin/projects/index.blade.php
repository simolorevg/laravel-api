@extends('layouts.app')
@section('content')
    <h2 class="text-center">Tutti i progetti</h2>
    <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">
        Crea nuovo progetto
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Progetto</th>
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
                    <td>
                        <div class="container d-flex g-2">
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Do you want delete this item?')">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                            <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->id) }}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->id) }}">
                                Dettagli
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
