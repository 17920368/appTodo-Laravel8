@extends('app')
@section('content')
    <div class="container w-25 border p-24 mt-4 mb-5">
        <form method="POST" action="{{ route('categoria.store') }}">
            {{ csrf_field() }}
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la categoría</label>
                <input type="text" class="form-control" id="name" name="name">
                <label for="color" class="form-label">Color de la categoría</label>
                <input type="color" class="form-control" id="color" name="color">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
