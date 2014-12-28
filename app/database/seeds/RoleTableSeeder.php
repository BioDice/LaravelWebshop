<?php

use App\Models\Role;

class RoleTableSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('roles')->delete();

        Role::create(array(
            'name' => 'admin',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Role::create(array(
            'name' => 'customer',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}