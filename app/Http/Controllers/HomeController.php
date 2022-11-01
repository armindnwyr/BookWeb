<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\docente;
use App\Models\informe;
use App\Models\libro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $autor = autor::count();
        $docente = docente::count();
        $informe = informe::count();
        $libro = libro::count();

        // dd($libro);

        return view('home', compact('autor','docente','informe','libro'));
    }
}
