<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class OrderProduct extends Eloquent {

    protected $table = 'ordersproducts';
    protected $fillable = array('ordersproducts_orderID', 'ordersproducts_productID', 'amount', 'created_at', 'updated_at');

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'ordersproducts_productID');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'ordersproducts_orderID');
    }
}