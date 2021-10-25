<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'role_id' => Role::where('internal_name', 'admin')->first()->id,
            'name' => 'Admin',
            'email' => 'admin@admin.cz',
            'password' => Hash::make('admin'),
            'remember_token' => str_random(10)
        ]);

        User::create([
            'role_id' => Role::where('internal_name', 'editor')->first()->id,
            'name' => 'Editor',
            'email' => 'editor@editor.cz',
            'password' => Hash::make('editor'),
            'remember_token' => str_random(10)
        ]);
    }
}
