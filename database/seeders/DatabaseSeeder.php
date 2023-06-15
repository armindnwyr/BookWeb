<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\categoria;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        categoria::factory(2)->create();

        $this->call(RoleSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(InformeSeeder::class);
        //Usuario Administrador
        $user=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('administrador'),
        ]);
        $user->assignRole([1]);
        //Usuario Jefe de Area
        $jefe=User::create([
            'name'=>'Jefe de Area',
            'email'=>'jefe@gmail.com',
            'password'=>bcrypt('jefedearea'), 
        ]);
        $jefe->assignRole([2]);
        //Usuario Practicante
        $prt=User::create([
            'name'=>'Practicante',
            'email'=>'practicante@gmail.com',
            'password'=>bcrypt('practicante1'), 
        ]);

        $prt->assignRole([3]);
    }
}
