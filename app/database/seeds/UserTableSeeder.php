<?php

use App\Models\User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('users')->delete();

        User::create(array(
            'username' => 'admin',
            'password' => '',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}