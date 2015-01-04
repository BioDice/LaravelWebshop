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
            'password' => \Hash::make('admin'),
            'roleID' => 1,
            'firstname' => 'admin',
            'lastname' => 'admin',
            'address' => 'admin',
            'postalcode' => 'admin',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}