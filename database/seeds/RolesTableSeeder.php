<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $prevRole = Role::create([
            'internal_name' => 'editor',
            'name' => 'Editor'
        ]);

        Role::create([
            'internal_name' => 'admin',
            'name' => 'Admin',
            'inherit_id' => $prevRole->id
        ]);
    }
}
