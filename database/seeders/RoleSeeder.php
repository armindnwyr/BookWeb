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
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Jefe de Area']);
        $role2 = Role::create(['name' => 'Practicante']);
        
       Permission::create(['name'=>'roles.index']);
       Permission::create(['name'=>'roles.create']);
       Permission::create(['name'=>'roles.edit']);
       Permission::create(['name'=>'roles.destroy']);
       Permission::create(['name'=>'usuarios.index']);
       Permission::create(['name'=>'usuarios.create']);
       Permission::create(['name'=>'usuarios.edit']);
       Permission::create(['name'=>'usuarios.destroy']);
       Permission::create(['name' => 'home']);
       /*PERMISON PARA DOCENTE*/
       Permission::create(['name' => 'docentes.index']);
       Permission::create(['name' => 'docentes.create']);
       Permission::create(['name' => 'docentes.edit']);
       Permission::create(['name' => 'docentes.destroy']);


       /*PERMISON PARA AUTOR*/
       Permission::create(['name' => 'autors.index']);
       Permission::create(['name' => 'autors.create']);
       Permission::create(['name' => 'autors.edit']);
       Permission::create(['name' => 'autors.destroy']);

       /*PERMISON PARA CATEGORIA*/
       Permission::create(['name' => 'categorias.index']);
       Permission::create(['name' => 'categorias.create']);
       Permission::create(['name' => 'categorias.edit']);
       Permission::create(['name' => 'categorias.destroy']);

       /*PERMISON PARA INFORME*/
       Permission::create(['name' => 'informes.index']);
       Permission::create(['name' => 'informes.create']);
       Permission::create(['name' => 'informes.edit']);
       Permission::create(['name' => 'informes.destroy']);

              /*PERMISON PARA LIBRO*/
       Permission::create(['name' => 'libros.index']);
       Permission::create(['name' => 'libros.create']);
       Permission::create(['name' => 'libros.edit']);
       Permission::create(['name' => 'libros.destroy']);


       $permisos = Permission::all();

           $role1->syncPermissions($permisos);

    }


}
