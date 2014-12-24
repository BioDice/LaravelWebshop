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
            'password' => '$2a$10$dJDq62UV5WezqOJCarWwbuZwnWLr1FX0V63tZgnzkOOXLMbgCUul6 ',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}