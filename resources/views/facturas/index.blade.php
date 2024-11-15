@extends('layouts.app')
@section('title', 'Facturas')
@section('content')
<h1>Lista de facturas</h1>
<div class="container">
    <a href="{{ route('factura.create') }}" class="btn btn-warning">CREAR</a>
</div>
<br>
<table class="table table-striped-columns">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Fecha</th>
        <th scope="col">Cliente</th>
        <th scope="col">Monto</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    @foreach($facturas as $factura)
    <tbody>
        <tr>
            <td>{{ $factura->id }}</td>
            <td>{{ $factura->fecha_factura }}</td>
            <td>{{ $factura->cliente }}</td>
            <td>{{ $factura->monto }}</td>
            <td>
                <a href="{{ route('factura.update', $factura->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <a href="{{ route('factura.destroy', $factura->id)}}" class="btn btn-danger"> Delete </a>
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
{{ $facturas->links('pagination::bootstrap-4') }}
@endsection