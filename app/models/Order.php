<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent {

    protected $fillable = array('customerID', 'created_at', 'updated_at');

    public function ordersproducts()
    {
        return $this->belongsToMany('OrderProduct');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}