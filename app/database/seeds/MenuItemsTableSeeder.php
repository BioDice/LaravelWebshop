<?php

class MenuItemsTableSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('menu_items')->delete();

        MenuItem::create(array(
            'name' => 'Home',
            'url' => 'home',
            'class' => 'nav1',
            'created_at' => $now,
            'updated_at' => $now
        ));

        MenuItem::create(array(
            'name' => 'Sign up',
            'url' => 'register',
            'class' => 'nav4',
            'created_at' => $now,
            'updated_at' => $now
        ));

        MenuItem::create(array(
            'name' => 'Log in',
            'url' => 'login',
            'class' => 'nav6',
            'created_at' => $now,
            'updated_at' => $now
        ));

        MenuItem::create(array(
            'name' => 'About us',
            'url' => 'about',
            'class' => 'nav6',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}