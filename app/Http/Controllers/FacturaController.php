<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {   
        $facturas = Factura::paginate(4);
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        return view('facturas.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'fecha_factura' => 'required|date',
            'cliente' => 'required|string|max:50',
            'monto' => 'required|numeric|min:0'
        ]);

        Factura::create([
            'fecha_factura' => $request->fecha_factura,
            'cliente' => $request->cliente,
            'monto' => $request->monto
        ]);
        
        return redirect()->route('factura.index');
    }

    public function edit($id)
    {
        $factura = Factura::find($id);
        return view('facturas.edit', compact('factura'));
    }

public function update(Request $request) {
    $request->validate([
        'fecha_factura' => 'required|date',
        'cliente' => 'required|string|max:50',
        'monto' => 'required|numeric|min:0'
    ]);

    $factura = Factura::find($request->id);
    if ($factura) {
        $factura->fecha = $request->fecha_factura;
    $factura->cliente = $request->cliente;
    $factura->monto = $request->monto;
    $factura->save();
    } else {
        //
    }

    return redirect()->route('factura.index');
}
    public function destroy($id)
    {
        $factura = Factura::find($id);
        $factura->delete();

        return redirect()->route('factura.index');
    }
    
}

