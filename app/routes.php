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
Route::model('order', 'App\Models\Order');

/* HomeController */
Route::get('/', ['uses' => 'HomeController@Home', 'as' => 'home']);
Route::get('home', ['uses' => 'HomeController@Home', 'as' => 'home']);
Route::get('about', ['uses' => 'HomeController@About', 'as' => 'about']);
Route::get('menu', ['uses' => 'HomeController@GetMenu', 'as' => 'menu']);
Route::get('search', ['uses' => 'HomeController@Search', 'as' => 'home.search']);

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
Route::get('changeamount', ['uses' => 'CartController@ChangeAmountProduct', 'as' => 'cart.changeamount']);
Route::get('deleteproduct/{product}', ['uses' => 'CartController@DeleteProduct', 'as' => 'cart.deleteproduct']);

/* CheckoutController */
Route::get('checkout', ['uses' => 'CheckoutController@Checkout', 'as' => 'checkout.checkout']);
Route::post('createorder', ['uses' => 'CheckoutController@CreateOrder', 'as' => 'checkout.create']);
Route::get('final', ['uses' => 'CheckoutController@Final', 'as' => 'checkout.final']);

/****************/
/* Admin routes */
/****************/
/* _BHomeController */
Route::get('admin', ['uses' => '_BHomeController@Home', 'as' => 'admin.dashboard'])->before('admin');

/* _BProductController */
Route::get('admin/product', ['uses' => '_BProductController@Index', 'as' => 'admin.product.index'])->before('admin');
Route::get('admin/product/create', ['uses' => '_BProductController@Create', 'as' => 'admin.product.create'])->before('admin');
Route::get('admin/product/edit/{product}', ['uses' => '_BProductController@Edit', 'as' => 'admin.product.edit'])->before('admin');
Route::get('admin/product/delete/{product}', ['uses' => '_BProductController@Delete', 'as' => 'admin.product.delete'])->before('admin');
Route::post('admin/product/post_create', ['uses' => '_BProductController@PostCreate', 'as' => 'admin.product.post_create'])->before('admin');
Route::post('admin/product/post_edit', ['uses' => '_BProductController@PostEdit', 'as' => 'admin.product.post_edit'])->before('admin');

/* _BCategoryController */
Route::get('admin/category', ['uses' => '_BCategoryController@Index', 'as' => 'admin.category.index'])->before('admin');
Route::get('admin/category/create', ['uses' => '_BCategoryController@Create', 'as' => 'admin.category.create'])->before('admin');
Route::get('admin/category/edit/{category}', ['uses' => '_BCategoryController@Edit', 'as' => 'admin.category.edit'])->before('admin');
Route::get('admin/category/delete/{category}', ['uses' => '_BCategoryController@Delete', 'as' => 'admin.category.delete'])->before('admin');
Route::post('admin/category/post_create', ['uses' => '_BCategoryController@PostCreate', 'as' => 'admin.category.post_create'])->before('admin');
Route::post('admin/category/post_edit', ['uses' => '_BCategoryController@PostEdit', 'as' => 'admin.category.post_edit'])->before('admin');

/* _BOrderController */
Route::get('admin/order', ['uses' => '_BOrderController@Index', 'as' => 'admin.order.index'])->before('admin');
Route::get('admin/order/edit/{order}', ['uses' => '_BOrderController@Edit', 'as' => 'admin.order.edit'])->before('admin');
Route::get('admin/order/delete/{order}', ['uses' => '_BOrderController@Delete', 'as' => 'admin.order.delete'])->before('admin');
Route::get('admin/order/deleteproduct/{order}/{product}', ['uses' => '_BOrderController@DeleteProduct', 'as' => 'admin.order.deleteproduct'])->before('admin');
Route::get('admin/order/addproduct/{order}/{product}', ['uses' => '_BOrderController@AddProduct', 'as' => 'admin.order.addproduct'])->before('admin');
Route::get('admin/order/changeamount', ['uses' => '_BOrderController@ChangeAmount', 'as' => 'admin.order.changeamount'])->before('admin');
Route::post('admin/order/getaddproducttable', ['uses' => '_BOrderController@GetAddProductTable', 'as' => 'admin.order.getaddproductTable'])->before('admin');
Route::post('admin/order/post_edit', ['uses' => '_BOrderController@PostEdit', 'as' => 'admin.order.post_edit'])->before('admin');

