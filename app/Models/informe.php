<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informe extends Model
{
    use HasFactory;

    public function autor(){
        return $this->belongsTo('App\Models\Autor');
    }

    public function docente(){
        return $this->belongsTo('App\Models\Docente');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

}
