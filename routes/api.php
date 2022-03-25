<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeneroController as APIGeneroController;
use App\Http\Controllers\Api\FuncionesController as APIFuncionesController;
use App\Http\Controllers\Api\PeliculasController as APIPeliculasController;
use App\Http\Controllers\Api\SalasController as APISalasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route:: get('/generos', [APIGeneroController::class,'get']) -> name ('api.generos.get');
Route:: get('/funciones', [APIFuncionesController::class,'get']) -> name ('api.funciones.get');
Route:: get('/peliculas', [APIPeliculasController::class,'get']) -> name ('api.peliculas.get');
Route:: get('/salas', [APISalasController::class,'get']) -> name ('api.salas.get');


