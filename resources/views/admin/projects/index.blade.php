@extends('layouts.app')
@section('content')
    <h2 class="text-center">Tutti i progetti</h2>
    <div class="my-container">
        <div class="d-flex flex-row justify-content-between">
            <a class="btn btn-primary my-3" href="{{ route('admin.projects.create') }}">
                Crea nuovo progetto
            </a>
            <a class="btn btn-primary my-3" href="{{ route('admin.technologies.create') }}">
                Crea nuova tecnologia
            </a>
            <a class="btn btn-primary my-3" href="{{ route('admin.technologies.index') }}">
                Lista tecnologie
            </a>
        </div>
        <table class="table rounded-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Project</th>
                    <th scope="col">Author</th>
                    <th scope="col">Type</th>
                    <th scope="col">Technology</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->post }}</td>
                        <td>{{ $project->author }}</td>
                        <td>{{ $project->type?->type }}</td>
                        <td>
                            @forelse ($project->technologies as $technology)
                                {{ $technology->name }}
                            @empty
                                <p>Nessuna technologia</p>
                            @endforelse
                        </td>
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
                                <a class="btn btn-warning mx-3" href="{{ route('admin.projects.edit', $project->id) }}">
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
    </div>
@endsection
