<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent {

    protected $fillable = array('name', 'parentID', 'created_at', 'updated_at');

    public function products()
    {
        return $this->hasMany('Product', 'categoryID');
    }

//    public function parent()
//    {
//        return $this->belongsTo('Category', 'parentid');
//    }

    public function children()
    {
        return $this->hasMany('Category', 'parentID');
    }

    public function parent()
    {
        return $this->belongsTo('Category', 'parentID');
    }
}