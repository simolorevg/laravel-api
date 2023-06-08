@extends('layouts.app')
@section('content')
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
