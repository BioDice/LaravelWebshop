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
        if ($cartEntries == null) $cartEntries = array();
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
            $user = User::create(Input::all());

        $order = new Order;
        $order->userID = $user->id;
        $order->created_at = $now;
        $order->updated_at = $now;
        $order->save();

        foreach (Session::get('productsInCart') as $cartEntry) {
            $order->products()->attach($cartEntry->GetProduct()->id, array('amount' => $cartEntry->GetAmount()));
        }

//        foreach (Session::get('productsInCart') as $cartEntry) {
//            $pivot = new OrderProduct;
//            $pivot->ordersproducts_orderID = $order->id;
//            $pivot->ordersproducts_productID = $cartEntry->GetProduct()->id;
//            $pivot->amount = $cartEntry->GetAmount();
//            $pivot->save();
//        }

        Session::forget('productsInCart');
        return View::make('Frontend.Checkout.final', compact('user', 'order'));
    }
}