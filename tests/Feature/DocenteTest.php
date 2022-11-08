<?php

namespace Tests\Feature;

use App\Models\docente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Tests\TestCase;

class DocenteTest extends TestCase
{
    /** @test */
    public function a_docente_can_be_created(){
        // $this->withDeprecationHandling();
        // $user = User::find(1);
 
        // $response = $this->actingAs($user)
        //                  ->withSession(['email' => 'admin@gmail.com', 'password' => 'administrador'])
        //                  ->get('login');

        // $this->post('docentes',[
        //     'doce_nombre' => 'Reese Weimann',
        //     'doce_paterno' => 'Yvette Nikolaus I',
        //     'doce_materno' => 'Prof. Lucie Pacocha',
        //     'doce_sexo' => 'Masculino',
        //     'doce_celular' => 279968381,
        //     'doce_correo' => 'marion.batz@example.org',
        // ])->assertRedirect('login');

        $this->assertDatabaseHas('docentes', [
            'doce_nombre' => 'Susanna Christiansen',
            'doce_paterno' => 'Prof. Jarred Batz',
            'doce_materno' => 'Enola Nolan',
            'doce_sexo' => 'Masculino',
            'doce_celular' => 758230945,
            'doce_correo' => 'zkuhlman@example.net',
        ]);
    }
    /** @test */
    public function docenteDestroy(){
        $delete = docente::factory()->create();
        $this->delete('docentes/$delete->id')->assertRedirect('login');

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
         $this->post('docentes',[
            'doce_nombre' => 'Reese Weimann',
            'doce_paterno' => 'Yvette Nikolaus I',
            'doce_materno' => 'Prof. Lucie Pacocha',
            'doce_sexo' => 'Masculino',
            'doce_celular' => 279968381,
            'doce_correo' => 'marion.batz@example.org',
        ])->assertRedirect('login');
        
    }

    /** @test */
    // public function docenteValidate(){
    //     // $blog = docente::factory()->create();
    //     $this->post('docentes',[
    //         'doce_nombre' => 'null',
    //         'doce_paterno' => '',
    //         'doce_materno' => '',
    //         'doce_sexo' => '',
    //         'doce_celular',
    //         'doce_correo' => '',
    //     ])->assertSessionHasErrors('doce_nombre', 'doce_paterno','doce_materno','doce_sexo','doce_celular','doce_correo');
    // }
    
}
