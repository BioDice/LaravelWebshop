<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent {

    protected $fillable = array('short_descr', 'long_descr', 'small_image', 'big_image', 'price', 'categoryID', 'created_at', 'updated_at');

    public function category()
    {
        return $this->belongsTo('Category', 'categoryID');
    }

}