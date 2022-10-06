<?php

namespace App\Http\Controllers;

use App\Models\autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autor.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autor.create');
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
            'nombre'=>'required',
            'paterno'=>'required',
            'materno'=>'required',
            'codigo'=>'required|numeric',
            'sexo'=>'required',
            'correo'=>'required',
            'celular'=>'required|numeric',
        ]);

        $autores = new Autor();

        $autores->au_nombre = $request->nombre;
        $autores->au_paterno = $request->paterno;
        $autores->au_materno = $request->materno;
        $autores->au_codigo = $request->codigo;
        $autores->au_sexo = $request->sexo;
        $autores->au_correo = $request->correo;
        $autores->au_celular = $request->celular;
        
        $autores->save();
        
        return redirect()->route('autor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(autor $autor)
    {
        return view('autor.index', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(autor $autor)
    {
        return view('autor.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autor $autor)
    {
        $request->validate([
            'nombre'=>'required',
            'paterno'=>'required',
            'materno'=>'required',
            'codigo'=>'required|numeric',
            'sexo'=>'required',
            'correo'=>'required',
            'celular'=>'required|numeric',
        ]);

        //$autores = new Autor();

        $autor->au_nombre = $request->nombre;
        $autor->au_paterno = $request->paterno;
        $autor->au_materno = $request->materno;
        $autor->au_codigo = $request->codigo;
        $autor->au_sexo = $request->sexo;
        $autor->au_correo = $request->correo;
        $autor->au_celular = $request->celular;
        
        $autor->save();
        
        return redirect()->route('autor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(autor $autor)
    {
        $autor->delete();

        return redirect()->route('autor.index');
    }
}
