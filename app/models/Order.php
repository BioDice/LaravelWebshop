<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent {

    protected $fillable = array('customerID', 'created_at', 'updated_at');

    public function ordersproducts()
    {
        return $this->belongsToMany('App\Models\OrderProduct');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}