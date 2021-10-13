<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Users
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' =>'Lista y navega todos los usuarios del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle usuario',
            'slug' => 'users.show',
            'description' =>'Ver en detalle cada usuario del sistema'
        ]);
        Permission::create([
            'name' => 'Editar usuarios',
            'slug' => 'users.edit',
            'description' =>'Editar cualquier dato de un usuario'
        ]);
        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' =>'Eliminar cualquier usuario del sistema'
        ]);
        Permission::create([
            'name' => 'Creacion de usuarios',
            'slug' => 'users.create',
            'description' =>'Crear nuevos usuarios para el sistema'
        ]);


        //Roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' =>'Lista y navega todos los roles del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle roles',
            'slug' => 'roles.show',
            'description' =>'Ver en detalle cada rol del sistema'
        ]);
        Permission::create([
            'name' => 'Editar roles',
            'slug' => 'roles.edit',
            'description' =>'Editar cualquier dato de un rol'
        ]);
        Permission::create([
            'name' => 'Eliminar roles',
            'slug' => 'roles.destroy',
            'description' =>'Eliminar cualquier rol del sistema'
        ]);
        Permission::create([
            'name' => 'Creacion de roles',
            'slug' => 'roles.create',
            'description' =>'Crear nuevos roles para el sistema'
        ]);


        //Historia clinica

        Permission::create([
            'name' => 'Navegar historia clinica',
            'slug' => 'historic.index',
            'description' =>'Lista y navega las historias clinicas'
        ]);
        Permission::create([
            'name' => 'Ver detalle historia clinica',
            'slug' => 'historic.show',
            'description' =>'Ver en detalle cada historia clinica'
        ]);
        Permission::create([
            'name' => 'Editar historia clinica',
            'slug' => 'historic.edit',
            'description' =>'Editar cualquier dato de la historia clinica'
        ]);
        Permission::create([
            'name' => 'Eliminar historia clinica',
            'slug' => 'historic.destroy',
            'description' =>'Eliminar cualquier historia clinica'
        ]);
        Permission::create([
            'name' => 'Creacion de historia clinica',
            'slug' => 'historic.create',
            'description' =>'Crear nueva historia clinica'
        ]);





    }
}
