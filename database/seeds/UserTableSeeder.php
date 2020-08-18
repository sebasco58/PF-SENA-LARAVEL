<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'administrador',
                'email'=>'eladmin@mail.com',
                'password'=>Hash::make('12345678'),
            ],
        ]);

        DB::table('role_user')->insert([
            [
                'role_id'=>1,
                'user_id'=>1,
            ],
        ]);
    }
}
