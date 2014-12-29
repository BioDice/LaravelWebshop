<?php

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\CartEntry;

class CartController extends FrontendController {

    public function CartContent()
    {
        $cartEntries = Session::get('productsInCart');

        return View::make('Frontend.Cart.content', compact('cartEntries'));
    }

    public function AddProduct(Product $product)
    {
        if (Session::has('productsInCart'))
        {
            $cartEntries = Session::pull('productsInCart');
            $temp = null;
            foreach ($cartEntries as $cartEntry)
            {
                if ($cartEntry->GetProduct()->id == $product->id)
                {
                    $temp = $cartEntry;
                    break;
                }
            }

            if ($temp != null)
            {
                $cartEntry->Increment();
            }
            else
            {
                $temp = new CartEntry($product, 1);
                array_push($cartEntries, $temp);
            }
            Session::put('productsInCart', $cartEntries);
        }
        else
        {
            $arr = array();
            $pic = new CartEntry($product, 1);
            array_push($arr, $pic);
            Session::put('productsInCart', $arr);
        }

        return Redirect::back();
    }
}
