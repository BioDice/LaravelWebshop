<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class OrderProduct extends Eloquent {

    protected $table = 'ordersproducts';
    protected $fillable = array('name', 'parentid', 'created_at', 'updated_at');

    public function products()
    {
        return $this->belongsTo('Product');
    }

    public function orders()
    {
        return $this->belongsTo('Order');
    }
}