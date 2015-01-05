<?php

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\CartEntry;
use Illuminate\Support\Facades\Input;

class CartController extends FrontendController {

    public function CartContent()
    {
        $cartEntries = Session::get('productsInCart');
        if ($cartEntries == null) $cartEntries = array();

        return View::make('Frontend.Cart.content', compact('cartEntries'));
    }

    public function AddProduct(Product $product)
    {
        if (Session::has('productsInCart'))
        {
            $cartEntries = Session::get('productsInCart');
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

    public function ChangeAmountProduct()
    {
        $cartEntries = Session::get('productsInCart');
        foreach ($cartEntries as $cartEntry)
        {
            if ($cartEntry->GetProduct()->id == Input::get('productID'))
            {
                $cartEntry->SetAmount(Input::get('amount'));
                break;
            }
        }
        Session::put('productsInCart', $cartEntries);
        return Redirect::back();
    }

    public function DeleteProduct(Product $product)
    {
        $cartEntries = Session::get('productsInCart');

        foreach ($cartEntries as $cartEntry)
        {
            if ($cartEntry->GetProduct()->id == $product->id)
            {
                // search for the right index and delete it immediatly from array
                unset($cartEntries[array_search($cartEntry, $cartEntries)]);
                // set he indexes to normal again
                $cartEntries = array_values($cartEntries);
                break;
            }
        }
        Session::put('productsInCart', $cartEntries);
        return Redirect::back();
    }
}
