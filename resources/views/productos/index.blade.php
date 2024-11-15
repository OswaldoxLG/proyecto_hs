@extends('layouts.app')
@section('title', 'Productos')
@section('content')
<h1>Lista de productos</h1>
<div class="container">
    <a href="{{ route('producto.create') }}" class="btn btn-warning">CREAR</a>
</div>
<br>
<table class="table table-striped-columns">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripción</th>
        <th scope="col">Categoría</th>
        <th scope="col">Precio</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    @foreach($productos as $producto)
    <tbody>
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->categoria }}</td>
            <td>{{ $producto->precio }}</td>
            <td>
                <a href="{{ route('producto.update', $producto->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <a href="{{ route('producto.destroy', $producto->id)}}" class="btn btn-danger"> Delete </a>
                {{-- <form action="{{ route('user.destroy', $usuario->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type='submit' class="btn btn-danger">
                        Eliminar
                    </button>
                </form> --}}
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
{{ $productos->links('pagination::bootstrap-4') }}
@endsection