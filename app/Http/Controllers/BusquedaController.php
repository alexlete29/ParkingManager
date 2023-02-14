<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Coche;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function inicio(){

        $coches = Coche::all();
        $usuarios = Usuario::all();  

        return view('busqueda', ['coches' => $coches] , ['usuarios' => $usuarios]);
    }

    public function buscar(Request $request){

        $usuarios = Usuario::all();  

        $coches = $request->except("_token");

        if($request->get('buscador')){
            $coches = Coche::where("created_at", "LIKE", "%{$request->get('buscador')}%")
                ->paginate();
                return view('busqueda', ['coches' => $coches] , ['usuarios' => $usuarios]);
        }

        return view('busqueda');
    }

    public function listaCocheUsuario(Request $request){

        $usuarios = Usuario::all(); 
        $coches = Coche::all();

        if($request->get('users')){
             $coches = Coche::where('user_id', "LIKE", "%{$request->get('users')}%")->paginate();

            return view('busqueda', ['coches' => $coches] , ['usuarios' => $usuarios]);
        }

        return view('busqueda');
    }

    public function mostrar(){

        $coches = Coche::all(); 

        return view('matricula', ['coches' => $coches]);
    }

    public function matricula(Request $request){

        $coches = $request->except("_token");

        if($request->get('buscadorM')){
            $coches = Coche::where("matricula", "LIKE", "%{$request->get('buscadorM')}%")
                ->paginate();
                return view('matricula', ['coches' => $coches]);
        }

        return view('matricula');
    }
}