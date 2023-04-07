<?php

namespace App\Http\Controllers;

use App\Models\escritor;
use Illuminate\Http\Request;

class EscritorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escritor = Escritor::all();

        return view('escritor.index', compact('escritor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escritor.create');
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'bibliografia' => 'required',
        ]);

        $escritor = new Escritor();

        $escritor->nombres = $request->nombres;
        $escritor->apellidos = $request->apellidos;
        $escritor->bibliografia = $request->bibliografia;

        $escritor->save();

        return redirect()->route('escritor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\escritor  $escritor
     * @return \Illuminate\Http\Response
     */
    public function show(escritor $escritor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\escritor  $escritor
     * @return \Illuminate\Http\Response
     */
    public function edit(escritor $escritor)
    {
        return view('escritor.edit', compact('escritor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\escritor  $escritor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, escritor $escritor)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'bibliografia' => 'required',
        ]);

        $escritor->nombres = $request->nombres;
        $escritor->apellidos = $request->apellidos;
        $escritor->bibliografia = $request->bibliografia;

        $escritor->save();

        return redirect()->route('escritor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\escritor  $escritor
     * @return \Illuminate\Http\Response
     */
    public function destroy(escritor $escritor)
    {
        $escritor->delete();
        
        return redirect()->route('escritor.index');
    }
}
