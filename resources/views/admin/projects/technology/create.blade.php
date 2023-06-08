@extends('layouts.app')
@section('content')
    <h2 class="text-center">Crea la tecnologia</h2>
    <div class="my-container my-2">
        <form action="{{ route('admin.technologies.store') }}" method="post" class="d-flex flex-column">
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
            <label for="typology">Tipologia</label>
            <input type="text" name="typology" id="typology">
            <button type="submit" class="btn btn-primary my-3">INVIA</button>
        </form>
    </div>
@endsection
