@extends('layouts.app')
@section('content')
    <h2 class="text-center">Lista Tecnologie</h2>
    <div class="my-container my-2">
        <table class="table rounded-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Technology</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $tech)
                    <tr>
                        <th scope="row">{{ $tech->id }}</th>
                        <td>{{ $tech->typology }}</td>
                        <td>
                            <div class="container d-flex g-2">
                                <form action="{{ route('admin.technologies.destroy', $tech->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Do you want delete this item?')">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                                <a class="btn btn-warning mx-3" href="{{ route('admin.technologies.edit', $tech->id) }}">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <a class="btn btn-primary" href="{{ route('admin.technologies.show', $tech->id) }}">
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
