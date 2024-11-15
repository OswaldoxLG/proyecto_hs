<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(3);
        return view('users.index', compact('usuarios'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        //validar datos
        $validateData = $request->validate([
            'name' => 'required|max:30',
            'apellido' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'rol' => 'required|string'
        ]);

        User::create([
            'name' => $validateData['name'],
            'apellido' => $validateData['apellido'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
            'rol' => $validateData['rol']
        ]);
        // $usuario = new User();
        // $usuario->name = $request->name;
        // $usuario->email = $request->email;
        // $usuario->password = Hash::make($request->password);
        // $usuario->save();
        return redirect()->route('usuario.index');
    }

    public function edit($id)
    {
        //dd($id);
        $usuario = User::find($id);
        return view('users.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        //validar datos
        $request->validate([
            'name' => 'required|max:30',
            'apellido' => 'required|max:50',
            'email' => 'required|email'
        ]);
        //buscar el usuario por el id
        $usuario = User::find($request->id);

        //si el usuario existe, asignar los nuevos datos
        if ($usuario) {
            $usuario->name = $request->name;
            $usuario->apellido = $request->apellido;
            $usuario->email = $request->email;
            $usuario->save();
        } else {
            //
        }
        return redirect()->route('usuario.index');
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
