<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Role extends Eloquent {

    protected $fillable = array('name', 'created_at', 'updated_at');


    public function users()
    {
        return $this->hasMany('App\Model\User');
    }
}
