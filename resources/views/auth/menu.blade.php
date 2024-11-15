@extends('layouts.app')
@section('title', 'crear')
@section('content')
<div class="container">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('usuario.index')}}">Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('producto.index')}}">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('factura.index')}}">Factura</a>
        </li>
    </ul>
</div>
@endsection