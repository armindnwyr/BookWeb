<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class escritor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'bibliografia',
    ];

    public function libros(){
        return $this->belongsToMany(libro::class);
    }
}
