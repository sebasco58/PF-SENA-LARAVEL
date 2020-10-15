<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::create([
            'name'=>'Daniel',
            'email'=>'daniel@mail.com',
            'password'=>Hash::make('12345678')
        ]);

        $user->assignRole(Role::findById(1));
    
    }
}
