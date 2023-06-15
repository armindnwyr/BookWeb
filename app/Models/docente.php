<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    use HasFactory;
    protected $fillable =[
        'doce_nombre',
        'doce_paterno',
        'doce_materno',
        'doce_sexo',
        // 'doce_celular',
        // 'doce_correo',
    ];

    public function informes(){
        return $this->hasMany(Informe::class);
    }
}
