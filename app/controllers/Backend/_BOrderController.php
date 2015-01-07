<?php

use App\Models\Order;
use App\Models\Product;

class _BOrderController extends FrontendController {

    public function Index()
    {
        $orders = Order::get();

        return View::make('Backend.Order.index', compact('orders'));
    }

    public function Edit(Order $order)
    {
        return View::make('Backend.Order.edit', compact('order'));
    }

    public function PostEdit()
    {
        $order = Order::find(Input::get('id'));

        $product = Product::find(Input::get('id'));
        $rules = array(
            'firstname' => array('required'),
            'lastname' => array('required'),
            'address' => array('required'),
            'postalcode' => array('required')
        );

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            return Redirect::route('admin.order.edit', array($order->id))->withInput()->withErrors($validation);
        }

        $user = $order->user;
        $user->fill(Input::all());
        $user->update();

        return Redirect::route('admin.order.index');
    }

    public function Delete(Order $order)
    {
        $order->products()->detach();
        $order->delete();

        return Redirect::route('admin.order.index');
    }

    public function GetAddProductTable()
    {
        $order = Order::find(Input::get('orderID'));

        $products = Product::where(function($query) {
            $query->where('short_descr', 'like', '%'.Input::get('keyword').'%')->orWhere('long_descr', 'like', '%'.Input::get('keyword').'%');
        })->get();

        return View::make('Backend.Order._addProductTable', compact('order', 'products'));
    }

    public function AddProduct(Order $order, Product $product)
    {
        if ($order->products()->find($product->id) != null)
        {
            $newAmount = $order->products->find($product->id)->pivot->amount;
            $newAmount++;
            $order->products()->updateExistingPivot($product->id, array('amount' => $newAmount));
        }
        else
        {
            $order->products()->attach($product->id, array('amount' => 1));
        }

        return Redirect::back();
    }

    public function ChangeAmount()
    {
        $order = Order::find(Input::get('orderID'));
        $order->products()->updateExistingPivot(Input::get('productID'), array('amount' => Input::get('amount')));
    }

    public function DeleteProduct(Order $order, Product $product)
    {
        $order->products()->detach($product->id);

        return Redirect::back();
    }

}