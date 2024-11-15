<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(4);
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'descripcion' => 'required|string|max:100',
            'categoria' => 'required|string|max:30',
            'precio' => 'required|numeric'
        ]);

        Producto::create([
            'descripcion' => $validateData['descripcion'],
            'categoria' => $validateData['categoria'],
            'precio' => $validateData['precio']
        ]);

        return redirect()->route('producto.index');
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request){
        $request->validate([
            'descripcion' => 'required|string|max:100',
            'categoria' => 'required|string|max:30',
            'precio' => 'required|numeric'
        ]);

        $producto = Producto::find($request->id);   

        if ($producto) {
            $producto->descripcion = $request->descripcion;
            $producto->categoria = $request->categoria;
            $producto->precio = $request->precio;
            $producto->save();
        } else {
            //
        }
        return redirect()->route('producto.index');
    }

    public function destroy($id){
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto.index');
    }

}
