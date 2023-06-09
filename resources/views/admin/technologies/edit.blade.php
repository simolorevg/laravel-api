@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="my-container my-3">
            <form action="{{ route('admin.technologies.edit', $technology) }}" method="POST" class="d-flex flex-column">
                @csrf
                @method('PUT')
                <label for="typology">Tipologia</label>
                <input type="text" name="typology" id="typology" value={{ $technology->typology }}>
                <button type="submit" class="btn btn-primary">INVIA</button>
            </form>
        </div>
    </div>
@endsection
