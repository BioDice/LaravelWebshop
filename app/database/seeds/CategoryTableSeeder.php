<?php

use App\Models\Category;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('categories')->delete();

        Category::create(array(
            'name' => 'Telefoons',
            'parentID' => '',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Category::create(array(
            'name' => 'Laptops',
            'parentID' => '',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Category::create(array(
            'name' => 'Tablets',
            'parentID' => '',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Category::create(array(
            'name' => 'Desktops',
            'parentID' => '0',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Category::create(array(
            'name' => 'IPads',
            'parentID' => '3',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Category::create(array(
            'name' => 'Samsung Tabs',
            'parentID' => '3',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}