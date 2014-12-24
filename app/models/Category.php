<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent {

    protected $fillable = array('name', 'parentID', 'created_at', 'updated_at');

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'categoryID');
    }

//    public function parent()
//    {
//        return $this->belongsTo('Category', 'parentid');
//    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parentID');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parentID');
    }
}