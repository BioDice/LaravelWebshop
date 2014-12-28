<?php

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends FrontendController {

    public function CartContent()
    {
        return View::make('Frontend.Cart.content');
    }

    public function AddProduct(Product $product)
    {
        if (Session::has('productsInCart'))
        {
            $arr = Session::get('productsInCart');
            array_push($arr, $product);
            Session::push('productsInCart', $arr);
        }
        else
        {
            $arr = array();
            Session::push('productsInCart', $arr);
        }

        return Redirect::back();
    }
}
