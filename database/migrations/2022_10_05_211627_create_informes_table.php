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
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('autor_id');

            $table->foreignId('docente_id')->references('id')->on('docente')->onDelete('set null');
            $table->foreignId('categoria_id')->references('id')->on('categoria')->onDelete('set null');
            $table->foreignId('autor_id')->references('id')->on('autor')->onDelete('set null');
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
