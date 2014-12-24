<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class MenuItem extends Eloquent {

    protected $fillable = array('name', 'url', 'class', 'created_at', 'updated_at');

}