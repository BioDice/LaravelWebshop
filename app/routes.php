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
/* Models */
Route::model('category', 'App\Models\Category');
Route::model('product', 'App\Models\Product');
Route::model('customer', 'App\Models\Customer');

/* HomeController */
Route::get('/', ['uses' => 'HomeController@Home', 'as' => 'home']);
Route::get('home', ['uses' => 'HomeController@Home', 'as' => 'home']);
Route::get('about', ['uses' => 'HomeController@About', 'as' => 'about']);
Route::get('menu', ['uses' => 'HomeController@GetMenu', 'as' => 'menu']);

/* AccountController */
Route::get('login', ['uses' => 'AccountController@login', 'as' => 'login'])->before('guest');
Route::get('logout', ['uses' => 'AccountController@LogOutUser', 'as' => 'logout']);
Route::get('register', ['uses' => 'AccountController@Register', 'as' => 'register']);
Route::post('storeCustomer', ['uses' => 'AccountController@StoreCustomer', 'as' => 'customer.create']);
Route::post('LoginUser', ['uses' => 'AccountController@LogInUser', 'as' => 'user.Login']);

/* CategoryController */
Route::get('ViewCategory/{category}', ['uses' => 'CategoryController@Index', 'as' => 'category']);

/* ProductController */
Route::get('productDetails/{product}', ['uses' => 'ProductController@ViewDetails', 'as' => 'product']);

/* CartController */
Route::get('cart', ['uses' => 'CartController@CartContent', 'as' => 'cart.content']);
Route::get('addproduct/{product}', ['uses' => 'CartController@AddProduct', 'as' => 'cart.addproduct']);

/* Admin routes */