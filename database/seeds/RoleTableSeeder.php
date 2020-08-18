<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'=>1,
                'nombre'=>'administrador',
                'descripcion'=>'al administrador',
            ],
            [
                'id'=>2,
                'nombre'=>'instructor',
                'descripcion'=>'usuarios del sistema',
            ],
        ]);
    }
}
