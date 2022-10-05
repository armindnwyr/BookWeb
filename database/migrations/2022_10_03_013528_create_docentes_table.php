<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('doce_nombre',  60);
            $table->string('doce_paterno', 60);
            $table->string('doce_materno', 60);
            //$table->enum('doce_sexo',['Masculino','Femenino','No Especificado']);
            $table->integer('doce_celular')->length(9);
            $table->string('doce_correo', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
