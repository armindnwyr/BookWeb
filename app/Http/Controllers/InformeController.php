<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\docente;
use App\Models\informe;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\categoria;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;


class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:informes.index')->only('index');
        $this->middleware('can:informes.create')->only('create','store');
        $this->middleware('can:informes.edit')->only('edit','update');
        $this->middleware('can:informes.destroy')->only('destroy');
    }
    public function index()
    {
        $informe = Informe::All();
        return view('informe.index', compact('informe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = Docente::all();
        $categoria = Categoria::all();
        $autor = Autor::all();
        //dd($docente);
        return view('informe.create', compact('docente','categoria','autor'));
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
            'descripcion'=>'required',
            'codigo'=>'required',
            'pdf'=>'required',
            'fecha'=>'required',
            'centro'=>'required',
            'docente'=>'required',
            'categoria'=>'required',
            'autor'=>'required',
        ]);

        $pdf = $request->file('pdf')->store('public/documento');

        $informe = new informe();

        $informe->info_nombre = $request->nombre;
        $informe->info_descripcion = $request->descripcion;
        $informe->info_codigo = $request->codigo;
        $informe->info_centro = $request->centro;
        $informe->info_pdf = $url = Storage::url($pdf);
        $informe->info_fecha = $request->fecha;
        $informe->docente_id = $request->docente;
        $informe->categoria_id = $request->categoria;
        $informe->autor_id = $request->autor;

        $informe->save();

        return redirect()->route('informes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function show(informe $informe)
    {
        return view('informe.index', compact('informe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function edit(informe $informe)
    {
        $docente = Docente::all();
        $categoria = Categoria::all();
        $autor = Autor::all();
        return view('informe.edit', compact('informe','docente', 'categoria', 'autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, informe $informe)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'codigo'=>'required',
            'fecha'=>'required',
            'centro'=>'required',
            'docente'=>'required',
            'categoria'=>'required',
            'autor'=>'required',
        ]);

        if($request->hasFile('pdf')){
            $request->validate([
                'pdf'=>'required',
            ]);

            // $path = '/storage/imagenes/'.$request->li_image;
            // if(File::exists($path))
            // {
            //     File::delete($path);
            // }
            $url = str_replace('storage','public', $informe->info_pdf);
            // Storage::delete($url);

            $pdf = $request->file('pdf')->store('public/documento');
            $informe->info_pdf = Storage::url($pdf);

            Storage::delete($url);
        }
        //$informe = new informe();

        $informe->info_nombre = $request->nombre;
        $informe->info_descripcion = $request->descripcion;
        $informe->info_codigo = $request->codigo;
        $informe->info_centro = $request->centro;
        $informe->info_fecha = $request->fecha;
        $informe->docente_id = $request->docente;
        $informe->categoria_id = $request->categoria;
        $informe->autor_id = $request->autor;

        $informe->save();

        return redirect()->route('informes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function destroy(informe $informe)
    {
        $informe->delete();

        return back()->with('eliminar', 'delete');
    }
}
