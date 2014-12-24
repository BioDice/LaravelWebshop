<?php namespace App\Models;

class Customer extends Eloquent {

    protected $fillable = array('username', 'password', 'firstname', 'insertion', 'lastname', 'address', 'postalcode','created_at', 'updated_at');

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
