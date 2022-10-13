<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Boss']);
       $role2 = Role::create(['name' => 'Asistente']);

       Permission::create(['name' => 'home']);
       /*PERMISON PARA DOCENTE*/
       Permission::create(['name' => 'docente.index']);
       Permission::create(['name' => 'docente.create']);
       Permission::create(['name' => 'docente.edit']);
       Permission::create(['name' => 'docente.destroy']);


       /*PERMISON PARA AUTOR*/
       Permission::create(['name' => 'autor.index']);
       Permission::create(['name' => 'autor.create']);
       Permission::create(['name' => 'autor.edit']);
       Permission::create(['name' => 'autor.destroy']);
       
       /*PERMISON PARA CATEGORIA*/
       Permission::create(['name' => 'categoria.index']);
       Permission::create(['name' => 'categoria.create']);
       Permission::create(['name' => 'categoria.edit']);
       Permission::create(['name' => 'categoria.destroy']);
       
       /*PERMISON PARA INFORME*/
       Permission::create(['name' => 'informe.index']);
       Permission::create(['name' => 'informe.create']);
       Permission::create(['name' => 'informe.edit']);
       Permission::create(['name' => 'informe.destroy']);  
       
              /*PERMISON PARA LIBRO*/
       Permission::create(['name' => 'libro.index']);
       Permission::create(['name' => 'libro.create']);
       Permission::create(['name' => 'libro.edit']);
       Permission::create(['name' => 'libro.destroy']);  
    }
}
