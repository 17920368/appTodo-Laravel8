@extends('app')
@section('content')
    <div class="container w-25 border p-24 mt-4 mb-5">
        <form method="POST" action="{{ route('todos.update', [$todo->id]) }}">
            @method('PATCH')
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
                <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
    </div>
@endsection
