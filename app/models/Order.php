<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent {

    protected $fillable = array('userID', 'created_at', 'updated_at');

    public function ordersproducts()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userID');
    }
}