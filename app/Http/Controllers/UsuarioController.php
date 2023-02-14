<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    public function inicio(){

        $usuarios = Usuario::all();

        return view('crearUsuario', ['usuarios' => $usuarios]);
    }
    public function crearUsuario(Request $request){

        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->name = $request -> name;
        $usuario->apellido = $request -> apellido;
        $usuario->email = $request -> email;

        $usuario->save();
        return redirect('/usuario');
    }
}