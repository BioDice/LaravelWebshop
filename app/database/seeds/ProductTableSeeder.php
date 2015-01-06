<?php

use App\Models\Product;

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

        Product::create(array(
            'short_descr' => 'Desktop',
            'long_descr' => 'Desktop I7 3.2GHZ',
            'small_image' => 'big_pic.jpg',
            'big_image' => 'big_pic_big.jpg',
            'price' => 223.63,
            'categoryID' => '4',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Samsung s3',
            'long_descr' => 'S3 van samsung 4.3inch',
            'small_image' => 'iphone.png',
            'big_image' => 'iphone_big.png',
            'price' => 1789.68,
            'categoryID' => '1',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Iphone 5s',
            'long_descr' => 'Iphone 5s met retina display',
            'small_image' => 'iphone.png',
            'big_image' => 'iphone_big.png',
            'price' => 28.13,
            'categoryID' => '5',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Ipad 5',
            'long_descr' => 'Ipad 5 retina display',
            'small_image' => 'Ipad.png',
            'big_image' => 'Ipad_big.png',
            'price' => 65.23,
            'categoryID' => '5',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Laptop Asus',
            'long_descr' => 'Laptop Asus 17 inch scherm met I7 processor en 6 gb RAM',
            'small_image' => 'Ipad.png',
            'big_image' => 'Ipad_big.png',
            'price' => 563.98,
            'categoryID' => '5',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Laptop HP',
            'long_descr' => 'Laptop HP 14inch met i3 processor',
            'small_image' => 'camera.png',
            'big_image' => 'camera_big.png',
            'price' => 10.12,
            'categoryID' => '1',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Camera Canon',
            'long_descr' => '10 megapixel camera van Canon',
            'small_image' => 'camera.png',
            'big_image' => 'camera_big.png',
            'price' => 233.53,
            'categoryID' => '2',
            'created_at' => $now,
            'updated_at' => $now
        ));

        Product::create(array(
            'short_descr' => 'Samsung galaxy',
            'long_descr' => 'Samsung galaxy met toetsenbord en bluetooth',
            'small_image' => 'Ipad.png',
            'big_image' => 'Ipad_big.png',
            'price' => 4634.83,
            'categoryID' => '6',
            'created_at' => $now,
            'updated_at' => $now
        ));
    }
}