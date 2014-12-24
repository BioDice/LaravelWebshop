<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('category', 'App\Models\Category');
Route::model('product', 'App\Models\Product');

Route::get('/', ['uses' => 'HomeController@Home', 'as' => 'home']);
Route::get('home', ['uses' => 'HomeController@Home', 'as' => 'home']);
Route::get('about', ['uses' => 'HomeController@About', 'as' => 'about']);
Route::get('menu', 'HomeController@GetMenu');
Route::get('login', ['uses' => 'HomeController@Login', 'as' => 'login']);
Route::get('register', ['uses' => 'HomeController@Register', 'as' => 'about']);
Route::get('ViewCategory/{category}', ['uses' => 'CategoryController@Index', 'as' => 'category']);
Route::get('productDetails/{product}', ['uses' => 'ProductController@ViewDetails', 'as' => 'product']);