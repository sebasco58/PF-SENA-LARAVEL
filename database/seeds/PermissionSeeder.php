<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // HERRAMIENTA
        Permission::create([
            'name'=>'crear herramienta'
        ]);
        Permission::create([
            'name'=>'ver herramienta'
        ]);
        Permission::create([
            'name'=>'eliminar herramienta'
        ]);
        Permission::create([
            'name'=>'listar herramienta'
        ]);
        Permission::create([
            'name'=>'editar herramienta'
        ]);
        // CATEGORÍA
        Permission::create([
            'name'=>'crear categoria'
        ]);
        Permission::create([
            'name'=>'ver categoria'
        ]);
        Permission::create([
            'name'=>'eliminar categoria'
        ]);
        Permission::create([
            'name'=>'listar categoria'
        ]);
        Permission::create([
            'name'=>'editar categoria'
        ]);
        //USUARIOS
        Permission::create([
            'name'=>'crear usuario'
        ]);
        Permission::create([
            'name'=>'ver usuario'
        ]);
        Permission::create([
            'name'=>'eliminar usuario'
        ]);
        Permission::create([
            'name'=>'listar usuario'
        ]);
        Permission::create([
            'name'=>'editar usuario'
        ]);
        //PPRESTAMOS
        Permission::create([
            'name'=>'crear prestamo'
        ]);
        Permission::create([
            'name'=>'ver prestamo'
        ]);
        Permission::create([
            'name'=>'eliminar prestamo'
        ]);
        Permission::create([
            'name'=>'listar prestamo'
        ]);
        Permission::create([
            'name'=>'editar prestamo'
        ]);
        //MANTENIMIENTOS
        Permission::create([
            'name'=>'crear mantenimiento'
        ]);
        Permission::create([
            'name'=>'ver mantenimiento'
        ]);
        Permission::create([
            'name'=>'eliminar mantenimiento'
        ]);
        Permission::create([
            'name'=>'listar mantenimiento'
        ]);
        Permission::create([
            'name'=>'editar mantenimiento'
        ]);
        //ROLES
        Permission::create([
            'name'=>'crear rol'
        ]);
        Permission::create([
            'name'=>'ver rol'
        ]);
        Permission::create([
            'name'=>'eliminar rol'
        ]);
        Permission::create([
            'name'=>'listar rol'
        ]);
        Permission::create([
            'name'=>'editar rol'
        ]);
    }
}
