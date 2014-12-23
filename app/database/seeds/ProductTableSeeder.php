<?php

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('products')->delete();

        Product::create(array(
            'short_descr' => 'Ipad 4',
            'long_descr' => 'Ipad 4 retina display',
            'small_image' => 'Ipad.png',
            'big_image' => 'Ipad_big.png',
            'price' => 100.83,
            'categoryID' => '5',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Ipad 5',
            'long_descr' => 'Ipad 5 retina display',
            'small_image' => 'Ipad.png',
            'big_image' => 'Ipad_big.png',
            'price' => 150.63,
            'categoryID' => '5',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}