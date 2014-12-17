<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

    protected $fillable = array('username', 'password', 'created_at', 'updated_at');

    public function orders()
    {
        return $this->belongsToMany('Order');
    }
}
