<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peliculas;

class PeliculasController extends Controller
{
    //
    public function get()
    {
       
        $peliculas =Peliculas :: select('id', 'id_genero', 'nombre', 'director' ) ->get();
        return $peliculas;
    }
}
