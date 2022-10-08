<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informe extends Model
{
    use HasFactory;

    public function autor(){
        return $this->belongsTo(Autor::class, 'au_id', 'id');
    }

    public function docentes(){
        return $this->belongsTo(Docente::class, 'doce_id', 'id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'cate_id', 'id');
    }

}
