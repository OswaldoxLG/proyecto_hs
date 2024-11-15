@extends('layouts.app')
@section('title', 'Editar Producto')
@section('content')
<div class="container">
    <br>
    <h1>EDITAR PRODUCTO</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $singleError)
            <li>{{ $singleError }}</li> 
        @endforeach
    </ul>
    @endif  

    <form action="{{ route('producto.update.data', $producto->id) }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingDescripcion" name="descripcion" placeholder="Descripción" required>
            <label for="floatingDescripcion">{{ $producto->descripcion }}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPrice" name="categoria" placeholder="Categoría" value="{{ $producto->categoria }}">
            <label for="floatingPrice">Categoría</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingPrecio" name="precio" placeholder="Precio" value="{{ $producto->precio }}" required step="0.01">
            <label for="floatingPrecio">Precio</label>
        </div>
        <input type="submit" value="ACTUALIZAR" class="btn btn-dark">
    </form>    
</div>    
@endsection