<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salas;

class SalasController extends Controller
{
    //
    public function get()
    {
       
        $salas = Salas :: select('id', 'sala') ->get();
        return $salas;
    }

}
