@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
<h1>Lista de usuarios</h1>
<div class="container">
    <a href="{{ route('usuario.create') }}" class="btn btn-warning">CREAR</a>
</div>
<br>
<table class="table table-striped-columns">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        <th scope="col">Rol</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    @foreach($usuarios as $usuario)
    <tbody>
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->rol }}</td>
            <td>
                <a href="{{ route('usuario.update', $usuario->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <a href="{{ route('usuario.destroy', $usuario->id)}}" class="btn btn-danger"> Delete </a>
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
{{ $usuarios->links('pagination::bootstrap-4') }}
@endsection