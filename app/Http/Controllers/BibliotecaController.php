<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;
use Psy\Readline\Libedit;

class BibliotecaController extends Controller
{

    
    public function index()
    {
        $libro = libro::select('*')->orderBy('id', 'desc')->get(); //::paginate(); para mostrar solo una cantidad de datos

        return view('welcome', compact('libro'));
    }

    public function show($id)
    {
        $libro = Libro::find($id);
        return view('showwelcome', compact('libro'));
    }
}
