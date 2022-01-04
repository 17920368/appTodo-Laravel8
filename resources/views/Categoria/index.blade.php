@extends('app')
@section('content')
    <div class="d-flex justify-content-lg-center mb-5">
        <a href="{{ route('categoria.create') }}" class="btn btn-primary">Nueva
            categoria</a>
    </div>
    <div class=" d-flex
        justify-content-sm-center">
        <table class="table w-50">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Color</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->name }}</td>
                        <td><span
                                style="background-color: {{ $categoria->color }};  width: 20px; height:20px; display:block;"></span>
                        </td>
                        <td class="d-flex justify-content-lg-around">
                            <a href="{{ route('categoria.edit', [$categoria->id]) }}" class="btn btn-primary">
                                Modificar</a>
                            <form action="{{ route('categoria.destroy', [$categoria->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm( 'Esta seguro de borrar categoria: {{ $categoria->name }}')  ">
                                    Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection()
