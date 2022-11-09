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
        // $this->withDeprecationHandling();
        // $user = User::find(1);
 
        // $response = $this->actingAs($user)
        //                  ->withSession(['email' => 'admin@gmail.com', 'password' => 'administrador'])
        //                  ->get('login');
        $this->withoutMiddleware();
        $this->post('docentes',[
            'doce_nombre' => 'German Skiles',
            'doce_paterno' => 'Bernadine Welch',
            'doce_materno' => 'Claudia Stamm',
            'doce_sexo' => 'Masculino',
            'doce_celular' => 137785331,
            'doce_correo' => 'odare@example.com',
        ])->assertRedirect('/');

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
        $this->withoutMiddleware();

        $delete = docente::factory()->create();
        $this->delete($delete->id);

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
        $this->withoutMiddleware();

         $this->post('docentes',[
            'doce_nombre' => 'Reese Weimann',
            'doce_paterno' => 'Yvette Nikolaus I',
            'doce_materno' => 'Prof. Lucie Pacocha',
            'doce_sexo' => 'Masculino',
            'doce_celular' => 279968381,
            'doce_correo' => 'marion.batz@example.org',
        ])->assertRedirect('/');
        
    }

    /** @test */
    public function docenteValidate(){
        $this->withoutMiddleware();

        $response = $this->post('docentes',[
            'nombre' => '',
        ]);
        $response->assertSessionHasErrors('nombre');
    }
     /** @test */
    // public function docenteRoute(){
    //     $this->get('docentes')->assertStatus(200);
    // }
    
}
