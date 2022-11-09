<?php

namespace Tests\Feature;

use App\Models\docente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class DocenteTest extends TestCase
{
    /** @test */
    public function docenteStore(){
        $this->withoutMiddleware(); 
        // Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware. 
        $this->post('docentes',[ // Esto permite verificar si esta ingresando correctamente
            //a la ruta "docentes"
            //Ingresamos los campos que necesitamos
            'doce_nombre' => 'German Skiles',
            'doce_paterno' => 'Bernadine Welch',
            'doce_materno' => 'Claudia Stamm',
            'doce_sexo' => 'Masculino',
            'doce_celular' => 137785331,
            'doce_correo' => 'odare@example.com',
        ])->assertRedirect('/');

        //Permite comprobar que la información almacenada existe dentro de la BD
        $this->assertDatabaseHas('docentes', [
            'doce_nombre' => 'German Skiles',
            'doce_paterno' => 'Bernadine Welch',
            'doce_materno' => 'Claudia Stamm',
            'doce_sexo' => 'Masculino',
            'doce_celular' => 137785331,
            'doce_correo' => 'odare@example.com',
        ]);
    }

    /** @test */
    public function docenteDestroy(){
        $this->withoutMiddleware();// Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware. 

        //Creamos una variable para almacenar el dato falso que vamos a eliminar
        $delete = docente::factory()->create();
        $this->delete($delete->id); //Permite eliminar por el id 

        //Comprueba si dicho dato deja de existir en la tabla docentes
        $this->assertDatabaseMissing('docentes', [
            'doce_nombre' => $delete->doce_nombre,
            'doce_paterno' => $delete->doce_paterno,
            'doce_materno' => $delete->doce_materno,
            'doce_sexo' => $delete->doce_sexo,
            'doce_celular' => $delete->doce_celular,
            'doce_correo' => $delete->doce_correo,
        ]);
    }

    /** @test */
    public function docenteInsert(){
        $this->withoutMiddleware();// Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware.
        // Esto permite verificar si esta ingresando correctamente.

         $this->post('docentes',[
            'doce_nombre' => 'Reese Weimann',
            'doce_paterno' => 'Yvette Nikolaus I',
            'doce_materno' => 'Prof. Lucie Pacocha',
            'doce_sexo' => 'Masculino',
            'doce_celular' => 279968381,
            'doce_correo' => 'marion.batz@example.org',
        ])->assertRedirect('/'); 
        //Si esta todo bien nos va dirigir a la ruta principal
    }

    /** @test */
    public function docenteValidate(){
        $this->withoutMiddleware();// Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware.

        $response = $this->post('docentes',[
            'nombre' => '',
        ]);
        $response->assertSessionHasErrors('nombre');
        //Comprueba que la sesión tiene errores enlazados.
    }

     /** @test */
    // public function docenteRoute(){
    //     $this->get('docentes')->assertStatus(200);
    // }
    
}
