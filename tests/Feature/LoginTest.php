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
        $credentials = [
            "email" => "admin@gmail.com",
            "password" => "administrador"
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('home');
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
     {
         $credentials = [
             "email" => "users@mail.com",
             "password" => "secret"
         ];
 
         $this->assertInvalidCredentials($credentials);
     }

     /** @test */
    public function loginRequireUserAuth()
    {
        $credentials = [
            "email" => null,
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
