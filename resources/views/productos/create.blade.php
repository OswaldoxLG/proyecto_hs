@extends('layouts.app')
@section('title', 'Crear Producto')
@section('content')
<div class="container">
    <br>
    <h1>CREAR PRODUCTO</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $singleError)
            <li>{{ $singleError }}</li> 
        @endforeach
    </ul>
    @endif  

    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="descripcion" placeholder="Descripción" required>
            <label for="floatingInput">Descripción</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPrice" name="categoria" placeholder="Categoría">
            <label for="floatingPrice">Categoría</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingPrice" name="precio" placeholder="Precio" required step="0.01">
            <label for="floatingPrice">Precio</label>
        </div>
        <input type="submit" value="ENVIAR" class="btn btn-dark">
    </form>    
</div>    
@endsection