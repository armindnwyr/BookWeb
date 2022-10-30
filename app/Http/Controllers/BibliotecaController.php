<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{

    public function index()
    {
        $libro = libro::all(); //::paginate(); para mostrar solo una cantidad de datos
        return view('welcome', compact('libro'));
    }
}
