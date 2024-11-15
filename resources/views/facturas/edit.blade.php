@extends('layouts.app')
@section('title', 'Editar Factura')
@section('content')
<div class="container">
    <br>
    <h1>EDITAR FACTURA</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $singleError)
            <li>{{ $singleError }}</li> 
        @endforeach
    </ul>
    @endif  

    <form action="{{ route('factura.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingDate" name="fecha_factura" placeholder="Fecha de Factura" required>
            <label for="floatingDate">{{$factura->descripcion}}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingClient" name="cliente" placeholder="Cliente" value="{{ $factura->cliente}}" required>
            <label for="floatingClient">Cliente</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingAmount" name="monto" placeholder="Monto" value="{{ $factura->monto}}" required step="0.01">
            <label for="floatingAmount">Monto</label>
        </div>
        <input type="submit" value="ENVIAR" class="btn btn-dark">
    </form>    
</div>    
@endsection