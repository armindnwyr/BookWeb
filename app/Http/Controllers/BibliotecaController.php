<?php

namespace App\Http\Controllers;

use App\Models\escritor;
use App\Models\libro;
use Illuminate\Http\Request;


class BibliotecaController extends Controller
{

    public function index()
    {
        $libro = libro::select('*')->orderBy('id', 'desc')->get(); //::paginate(); para mostrar solo una cantidad de datos
        return view('book', compact('libro'));
    }


    public function show(libro $libro)
    {
        // $libro = Libro::find($id);
        // $escritor = escritor::all();

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
                'slug' => $query->li_slug,
                'label' => $query->li_titulo,
            ];
        }

        return $data;
    }

}
