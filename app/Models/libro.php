<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;
    protected $fillable = [
        'li_titulo',
        'li_slug',
        'li_autor',
        'li_descripcion',
        'li_enlace',
        'li_image',
    ];

    public function getRouteKeyName(){

        return 'li_slug';
    }
}
