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
            $table->string('au_nombre', 60);
            $table->string('au_paterno', 60);
            $table->string('au_materno', 60);
            $table->integer('au_codigo')->lenght(6);
            $table->enum('au_sexo',['Masculino','Femenino','No Especificado']);
            $table->string('au_correo', 60);
            $table->integer('au_celular')->lenght(9);
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
