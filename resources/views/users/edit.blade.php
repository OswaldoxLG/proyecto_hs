@extends('layouts.app')
@section('title', 'actualizar')
@section('content')
<div class="container">
    <br>
    <h1>ACTUALIZAR USUARIO</h1>

    <form action="{{ route('usuario.update.data', $usuario->id )}}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="name" class="form-control" id="floatingInput" name="name" placeholder="Nombre" value="{{$usuario->name}}">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="apellido" class="form-control" id="floatingInput" name="apellido" placeholder="Apellido" value="{{$usuario->apellido}}">
            <label for="floatingInput">Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{$usuario->email}}">
            <label for="floatingInput">Correo</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" name="rol" value="{{$usuario->rol}}" required>
                <option value="" disabled selected>Selecciona un rol</option>
                <option value="cliente">Cliente</option>
                <option value="administrador">Administrador</option>
            </select>
            <label for="floatingSelect">Rol</label>
        </div>
        <input type="submit" value="ENVIAR" class="btn btn-dark">
    </form>    
</div>    
@endsection

