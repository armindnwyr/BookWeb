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
            'doce_nombre' => 'Muhammad Kutch II',
            'doce_paterno' => 'Odessa Cormier',
            'doce_materno' => 'Prof. Florencio Kulas DVM',
            'doce_sexo' => 'Masculino',
            // 'doce_celular' => 137785331,
            // 'doce_correo' => 'odare@example.com',
        ])->assertRedirect('/');

        //Permite comprobar que la información almacenada existe dentro de la BD
        $this->assertDatabaseHas('docentes', [
            'doce_nombre' => 'Muhammad Kutch II',
            'doce_paterno' => 'Odessa Cormier',
            'doce_materno' => 'Prof. Florencio Kulas DVM',
            'doce_sexo' => 'Masculino',
            // 'doce_celular' => 258330226,
            // 'doce_correo' => 'rbalistreri@example.com',
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
