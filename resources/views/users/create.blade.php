@extends('layouts.app')
@section('title', 'crear')
@section('content')
<div class="container">
    <br>
    <h1>CREAR USUARIO</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $singleError)
            <li>{{ $singleError }}</li> 
        @endforeach
    </ul>
    @endif  

    <form action="{{ route('usuario.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="name" class="form-control" id="floatingInput" name="name" placeholder="Nombre">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="apellido" class="form-control" id="floatingInput" name="apellido" placeholder="Apellido">
            <label for="floatingInput">Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Correo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" name="rol" required>
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

