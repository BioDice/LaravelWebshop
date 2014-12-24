<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class OrderProduct extends Eloquent {

    protected $table = 'ordersproducts';
    protected $fillable = array('name', 'parentid', 'created_at', 'updated_at');

    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function orders()
    {
        return $this->belongsTo('App\Models\Order');
    }
}