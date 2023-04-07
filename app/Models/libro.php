<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'li_titulo',
        'li_slug',
        'li_descripcion',
        'li_enlace',
        'li_image',
    ];

    public function escritors(){
        return $this->belongsToMany(escritor::class);
    }

    public function getRouteKeyName(){

        return 'li_slug';
    }

}
