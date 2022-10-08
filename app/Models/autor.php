<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class autor extends Model
{
    use HasFactory;

    //Relacion de uno a muchos
    public function informe(){
        return $this->hasMany(Informe::class);
    }
}
