<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{

    public function index()
    {
        $libro = libro::select('*')->orderBy('id', 'desc')->get(); //::paginate(); para mostrar solo una cantidad de datos

        return view('welcome', compact('libro'));
    }
}
