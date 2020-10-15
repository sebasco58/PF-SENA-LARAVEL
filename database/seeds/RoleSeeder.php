<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Role::create([
            'name'=>'administrador'
        ]);
        $user=Role::create([
            'name'=>'instructor'
        ]);

        $admin->givePermissionTo('crear usuario');
        $admin->givePermissionTo('ver usuario');
        $admin->givePermissionTo('eliminar usuario');
        $admin->givePermissionTo('listar usuario');
        $admin->givePermissionTo('editar usuario');

        $admin->givePermissionTo('crear rol');
        $admin->givePermissionTo('ver rol');
        $admin->givePermissionTo('eliminar rol');
        $admin->givePermissionTo('listar rol');
        $admin->givePermissionTo('editar rol');

        $user->givePermissionTo('ver usuario');

    }
}
