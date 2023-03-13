<?php

namespace App\Http\Controllers;

use App\Models\informe;
use App\Models\libro;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $informes = informe::count();
        $libros = libro::count();

        $libro = libro::latest()->orderBy('id', 'desc')->take(5)->get();
        // $libro = libro::select('*')->orderBy('id', 'desc')->get(); //::paginate(); para mostrar solo una cantidad de datos

        return view('welcome', compact('libro','libros','informes'));
    }

    
}
