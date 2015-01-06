<?php

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;

class CheckoutController extends FrontendController {

    public function Checkout()
    {
        $cartEntries = Session::get('productsInCart');
        if ($cartEntries == null)
        {
            return Redirect::route('home');
        }
        $user = Auth::user();

        return View::make('Frontend.Checkout.checkout', compact('cartEntries', 'user'));
    }

    public function CreateOrder()
    {
        $now = date('Y-m-d H:i:s');
        $user = null;

        if (Auth::user() != null)
            $user = Auth::user();
        else
        {
            $rules = array(
                'firstname' => array('required'),
                'lastname' => array('required'),
                'address' => array('required'),
                'postalcode' => array('required')
            );

            $validation = Validator::make(Input::all(), $rules);

            if ($validation->fails())
            {
                // Validation has failed.
                return Redirect::to('checkout')->withInput()->withErrors($validation);
            }
            $user = User::create(Input::all());
        }


        $order = new Order;
        $order->userID = $user->id;
        $order->created_at = $now;
        $order->updated_at = $now;
        $order->save();

        foreach (Session::get('productsInCart') as $cartEntry) {
            $order->products()->attach($cartEntry->GetProduct()->id, array('amount' => $cartEntry->GetAmount()));
        }

        Session::forget('productsInCart');
        return View::make('Frontend.Checkout.final', compact('user', 'order'));
    }
}