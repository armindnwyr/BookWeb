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
        Schema::create('informes', function (Blueprint $table) {
            $table->id();
            $table->string('info_nombre', 80);
            $table->longText('info_descripcion');
            $table->string('info_codigo', 10);
            $table->string('info_centro', 60);
            $table->string('info_enlace', 80);
            //$table->unsignedBigInteger('docentes_id');
            //$table->unsignedBigInteger('categorias_id');
            //$table->unsignedBigInteger('autors_id');

            //Llave Foranea
            $table->foreignId('docente_id')->constrained('docentes');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('autor_id')->constrained('autors');
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
        Schema::dropIfExists('informes');
    }
};
