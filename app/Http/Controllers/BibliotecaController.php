<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;


class BibliotecaController extends Controller
{

    public function __invoke()
    {
        $libro = libro::select('*')->orderBy('id', 'desc')->get(); //::paginate(); para mostrar solo una cantidad de datos

        return view('welcome', compact('libro'));
    }


    public function show($id)
    {
        $libro = Libro::find($id);
        return view('showwelcome', compact('libro'));
    }
   
    
    public function buscar(Request $request)
    {
        
        $term = $request->get('term');
        
        $query = Libro::where('li_titulo', 'LIKE', '%' . $term . '%')->get();
        
        $data = [];

        foreach($query as $query){
            $data[] = [
                'id' => $query->id,
                'label' => $query->li_titulo,
            ];
        }

        return $data;
    }

}
