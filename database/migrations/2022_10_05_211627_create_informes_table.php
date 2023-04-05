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
            $table->string('info_nombre');
            $table->string('info_slug')->unique();
            $table->longText('info_descripcion');
            $table->string('info_codigo');
            $table->string('info_centro');
            $table->string('info_pdf');
            $table->timestamp('info_fecha');
            //$table->unsignedBigInteger('docente_id')->nullable();
            //$table->unsignedBigInteger('categoria_id')->nullable();
            //$table->unsignedBigInteger('autor_id')->nullable();

            //Llave Foranea
            $table->foreignId('docente_id')->constrained('docentes')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('autor_id')->constrained('autors')->onDelete('cascade');

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
