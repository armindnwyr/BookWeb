<?php

namespace Tests\Feature;

use App\Models\autor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutorTest extends TestCase
{
     /** @test */
     public function autorStore(){
        $this->withoutMiddleware(); 
        // Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware. 
        $this->post('autors',[ // Esto permite verificar si esta ingresando correctamente
            //a la ruta "autors"
            //Ingresamos los campos que necesitamos
            'au_nombre' => 'Ozella Kutch',
            'au_paterno' => 'Ms. Maida Emmerich DVM',
            'au_materno' => 'Mr. Mac Buckridge',
            'au_codigo' => 643175,
            'au_sexo' => 'Masculino',
            'au_correo' => 'lbosco@example.net',
            'au_celular' => 145697218,
        ])->assertRedirect('/');

        //Permite comprobar que la información almacenada existe dentro de la BD
        $this->assertDatabaseHas('autors', [
            'au_nombre' => 'Ozella Kutch',
            'au_paterno' => 'Ms. Maida Emmerich DVM',
            'au_materno' => 'Mr. Mac Buckridge',
            'au_codigo' => 643175,
            'au_sexo' => 'Masculino',
            'au_correo' => 'lbosco@example.net',
            'au_celular' => 145697218,
        ]);
    }

    /** @test */
    public function autorDestroy(){
        $this->withoutMiddleware();// Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware. 

        //Creamos una variable para almacenar el dato falso que vamos a eliminar
        $delete = autor::factory()->create();
        $this->delete($delete->id); //Permite eliminar por el id 

        //Comprueba si dicho dato deja de existir en la tabla docentes
        $this->assertDatabaseMissing('autors', [
            'au_nombre' => $delete->au_nombre,
            'au_paterno' => $delete->au_paterno,
            'au_materno' => $delete->au_materno,
            'au_codigo' => $delete->au_codigo,
            'au_sexo' => $delete->au_sexo,
            'au_correo' => $delete->au_correo,
            'au_celular' => $delete->au_celular,
        ]);
    }

    /** @test */
    public function autorInsert(){
        $this->withoutMiddleware();// Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware.
        // Esto permite verificar si esta ingresando correctamente.

         $this->post('docentes',[
            'au_nombre' => 'Reese Weimann',
            'au_paterno' => 'Yvette Nikolaus I',
            'au_materno' => 'Prof. Lucie Pacocha',
            'au_codigo' => 643175,
            'au_sexo' => 'Masculino',
            'au_correo' => 'marion.batz@example.org',
            'au_celular' => 279968381,
        ])->assertRedirect('/'); 
        //Si esta todo bien nos va dirigir a la ruta principal
    }

    /** @test */
    public function autorValidate(){
        $this->withoutMiddleware();// Esto le permitirá probar sus rutas 
        // Y controlador de forma aislada de cualquier problema de middleware.

        $response = $this->post('autors',[
            'nombre' => '',
        ]);
        $response->assertSessionHasErrors('nombre');
        //Comprueba que la sesión tiene errores enlazados.
    }

     /** @test */
    // public function autorRoute(){
    //     $this->get('autors')->assertStatus(200);
    // }
    
}
