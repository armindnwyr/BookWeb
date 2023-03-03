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
        Schema::create('autors', function (Blueprint $table) {
            $table->id();
            $table->string('au_nombre');
            $table->string('au_paterno');
            $table->string('au_materno');
            $table->integer('au_codigo')->lenght(6);
            $table->enum('au_sexo',['Masculino','Femenino','No Especificado']);
            $table->string('au_correo')->nullable();
            $table->integer('au_celular')->nullable()->lenght(9);
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
        Schema::dropIfExists('autors');
    }
};
