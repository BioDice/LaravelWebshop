<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent {

    protected $fillable = array('name', 'parentid', 'created_at', 'updated_at');

    public function products()
    {
        return $this->belongsToMany('Product');
    }
}