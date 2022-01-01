@extends('app')
@section('content')
    <div class="container w-25 border p-24 mt-4 mb-5">
        <form method="POST" action="{{ route('todos.store') }}">
            {{ csrf_field() }}
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="title" class="form-label">Titulo de la tarea</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
    <div class="d-flex justify-content-sm-center">
        <table class="table w-50">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td><a href="{{ route('todos.edit', [$todo->id]) }}">Modificar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
