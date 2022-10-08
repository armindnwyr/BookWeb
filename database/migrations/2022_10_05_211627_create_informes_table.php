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
            $table->unsignedBigInteger('docente_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('autor_id')->nullable();

            //Llave Foranea
            $table->foreignId('doce_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreignId('cate_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreignId('au_id')->references('id')->on('autors')->onDelete('cascade');

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
