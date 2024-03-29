<?php

use App\Http\Controllers\CocheController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::post('/coche', [CocheController::class, 'store']);
Route::get('/', [CocheController::class, 'nuevoCoche']);
Route::delete('/coche/{id}', [CocheController::class, 'eleminarCoche']);


Route::get('/usuario' , [UsuarioController::class, 'inicio']);
Route::post('/crearUsuario' , [UsuarioController::class, 'crearUsuario']);


Route::get('/inicioAsignar' , [AsignarController::class, 'inicio']);
Route::post('/asignar' , [AsignarController::class, 'asignar']);

Route::get('/inicioBusqueda' , [BusquedaController::class, 'inicio']);
Route::get('/busqueda' , [BusquedaController::class, 'buscar']);
Route::get('/listaCocheUsuario' , [BusquedaController::class, 'listaCocheUsuario']);

Route::get('/inicioMatricula', [BusquedaController::class, 'mostrar']);
Route::get('/matricula', [BusquedaController::class, 'matricula']);
