<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function data()
    {
        $data = libro::select(
            'id',
            'li_titulo',
            'li_image',
            'li_descripcion',
            'li_slug',
            )
            ->get();

        return datatables()->collection($data)->toJson();    
    }
}
