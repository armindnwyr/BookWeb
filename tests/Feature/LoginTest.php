<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function loginTest()
    {
        $this->get('/login')->assertStatus(200)->assertSee('login');
        //permite comprobar si la ruta existe 
        //si existe el estado 200 
        //Comprueba que la cadena dada está contenida dentro de la respuesta. 
        //Esta afirmación escapará automáticamente de la cadena dada a menos que pase un segundo argumento de false

    }

    /** @test */
    public function loginAuth()
    {
        // $user = User::create([
        //     "name" => "Cristian",
        //     "email" => "prueba@gmail.com",
        //     "password" => bcrypt("administrador")
        // ]);

        $this->get('/login')->assertSee('login'); 
        //permite comprobar si la ruta existe y comprueba si hay una etiqueta login
        //enviamos la las crenciales que queremos comprobar
        $credentials = [
            "email" => "admin@gmail.com",
            "password" => "administrador"
        ];
        //enviamos por el metodo post con las credenciales
        $response = $this->post('login', $credentials);
        //si todo esta correcto nos va redirigir a la vista home
        $response->assertRedirect('home');
        //comprueba que las credenciales existen
        $this->assertCredentials($credentials);
    }

    // /** @test */
    // public function LoginCreateUser()
    // {
    //     User::create([
    //         "name" => "Cristian",
    //         "email" => "prueba4@gmail.com",
    //         "password" => bcrypt("dsadsadsa")
    //     ]);
    // }

     /** @test */
     public function loginAuthinvalid()
     //Comprobar a un usuario invalido
     {
        //enviamos cualquier credencial de prueba
         $credentials = [
             "email" => "users@mail.com",
             "password" => "secret"
         ];
        //comprueba que dichas credenciales no esta registrada
        //en la base de datos
         $this->assertInvalidCredentials($credentials);
     }

     /** @test */
    public function loginRequireUserAuth()
    {
        $credentials = [
            "email" => "",
            "password" => "secret"
        ];

        $response = $this->from('/login')->post('/login', $credentials);
        $response->assertRedirect('/login')->assertSessionHasErrors([
            'email' => 'The email field is required.',
        ]);
    }

    /** @test */
    public function loginRequirePasswordAuth()
    {
        $credentials = [
            "email" => "test@gmail.com",
            "password" => null
        ];

        $response = $this->from('/login')->post('/login', $credentials);
        $response->assertRedirect('/login')
            ->assertSessionHasErrors([
                'password' => 'The password field is required.',
            ]);
    }
}
