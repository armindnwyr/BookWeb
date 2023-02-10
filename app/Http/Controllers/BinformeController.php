<?php

namespace App\Http\Controllers;

use App\Models\informe;
use Illuminate\Http\Request;

class BinformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informe = Informe::select('*')->orderBy('id', 'desc')->get(); //::paginate(); para mostrar solo una cantidad de datos

        return view('informe', compact('informe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Informe $informe)
    {
        $informei = Informe::select('*')->orderBy('id', 'desc')->get();
        return view('showinforme', compact('informe','informei'));
    }

    public function search(Request $request)
    {
        
        $term = $request->get('term');
        
        $query = Informe::where('info_nombre', 'LIKE', '%' . $term . '%')->get();
        
        $data = [];

        foreach($query as $query){
            $data[] = [
                'id' => $query->id,
                'label' => $query->info_nombre,
            ];
        }

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
