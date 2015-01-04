<?php

use App\Models\Order;

class _BOrderController extends FrontendController {

    public function Index()
    {
        $orders = Order::get();

        return View::make('Backend.Order.index', compact('orders'));
    }
}