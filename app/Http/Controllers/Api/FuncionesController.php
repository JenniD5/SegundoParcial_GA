<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funciones;



class FuncionesController extends Controller
{
    //
    public function get()
    {
       
        $funciones =Funciones :: select('id', 'id_pelicula', 'id_sala', 'fecha', 'hora', 'created_at', 'updated_at' ) ->get();
        return $funciones;
    }
}
