@extends('layouts.app')

@section('content')
    <h1>Bienvenido a la página principal</h1>
    <p>Has iniciado sesión exitosamente</p>

    <div class="card">
        <div class="card-body">
            <a href="{{route('panel')}}" class="btn btn-primary">Panel Administrador</a>
        </div>
    </div>
    
@endsection