<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Coche;


use Illuminate\Http\Request;

class UsuarioController extends Controller
{
 function devolverUser()
 {
    $usuario = DB::table('usuarios')->get();
    return view('usuario',['array'=>$usuario]);
 }

 function usuarioRelacionado()
 {
    $coches = Coche::where('userid')->get();
    $usuarios = Usuario::get();
    return view('relacion',['arrayCoche'=>$coches], ['arrayUsuario'=>$usuarios]);
 }
 function asignar (Request $request)
 {
    $iduser = $request->get('select1');
    $idcoche = $request->get('select2');

    $user = Usuario::findOrFail($idcoche);
    $coche = Coche::findOrFail($iduser);
    $coche->update(['userid' => $user->id]);
    return redirect()->route('listaAsignado');
 }

 function borrarPersona ($id)
 {
    $user = Usuario::find($id);
    $user->delete();
    return redirect()->route('inserta2');
 }

 function devolverAsignar()
 {
    $user = DB::table('usuarios')->get();
    $coches = DB::table('coches')->get();
    return view('asignar', ['arrayUsuario'=>$user],['arrayCoche'=>$coches]);
 }
}