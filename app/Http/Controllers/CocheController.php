<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;


class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['coches'] = Coche::all();
        return view('archivos.inicio',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archivos.ingresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos = [
            'matricula' => 'required|string|max:10',
            'marca' => 'required|alpha|max:20',
            'modelo' => 'required|string|max:20',
        ];

        $mensaje = [
            'required' => ':attribute vacio o incorrecto'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosCoche = request()->except('_token');
        Coche::create($datosCoche);
        return redirect('coches')->with('mensaje','Coche añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datos['coches'] = Coche::all();

        return view('archivos.lista',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coche = Coche::findOrFail($id);
        return view('archivos.editarDatos',compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'matricula' => 'required|string|max:10',
            'marca' => 'required|alpha|max:20',
            'modelo' => 'required|string|max:20',
        ];

        $mensaje = [
            'required' => ':attribute vacio o incorrecto'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosCoche = request()->except(['_token','_method']);
        Coche::where('id','=',$id)->update($datosCoche);

        $coche = Coche::findOrFail($id);
        return redirect('coches')->with('mensaje','Coche editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coche::destroy($id);
        return redirect('coches')->with('mensaje','Coche borrado');
    }

    public function buscar(){
       
        return view('archivos.buscar');
    }

    public function busqueda(Request $request){

        $datosCoche = request()->except(['_token']);
        $datosMatricula = substr($datosCoche['matricula'], 0, 3);
        $datos['coches'] = Coche::where('matricula','like',$datosMatricula . '%')->get();

        return view('archivos.buscar',$datos);
    }
}

