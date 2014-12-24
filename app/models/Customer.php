<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent {

    protected $fillable = array('username', 'password', 'firstname', 'insertion', 'lastname', 'address', 'postalcode','created_at', 'updated_at');

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
