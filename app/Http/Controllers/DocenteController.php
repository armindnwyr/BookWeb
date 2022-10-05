<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $docentes = Docente::all(); //::paginate(); para mostrar solo una cantidad de datos
        
        return view('docente.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required',
            'paterno'=> 'required',
            'materno'=> 'required',
            'genero' => 'required',
            'celular' => 'numeric',
            'correo' => 'required',
        ]);

        //return $request->all();
        $docente = new docente();

        $docente->doce_nombre = $request->nombre;
        $docente->doce_paterno = $request->paterno;
        $docente->doce_materno = $request->materno;
        $docente->doce_sexo = $request->genero;
        $docente->doce_celular = $request->celular;
        $docente->doce_correo = $request->correo;

       $docente->save();

       return redirect()->route('docente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(docente $docente)
    {
        return view('docente.index', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(docente $docente)
    {
        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, docente $docente)
    {
        $request->validate([
            'nombre'=> 'required',
            'paterno'=> 'required',
            'materno'=> 'required',
            'genero' => 'required',
            'celular' => 'numeric',
            'correo' => 'required',
        ]);

        //return $request->all();

        $docente->doce_nombre = $request->nombre;
        $docente->doce_paterno = $request->paterno;
        $docente->doce_materno = $request->materno;
        $docente->doce_sexo = $request->genero;
        $docente->doce_celular = $request->celular;
        $docente->doce_correo = $request->correo;

       $docente->save();

       return redirect()->route('docente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(docente $docente)
    {
        $docente->delete();

        return redirect()->route('docente.index');
    }
}
