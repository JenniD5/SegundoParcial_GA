<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genero;


class GeneroController extends Controller
{
    //
    public function get()
    {
       
        $generos = Genero :: select('id', 'genero') ->get();
        return $generos;
    }
}
