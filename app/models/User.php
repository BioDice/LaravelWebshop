<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface {

    protected $fillable = array('username', 'password', 'firstname', 'roleID', 'insertion', 'lastname', 'address', 'postalcode','created_at', 'updated_at');

    public function IsAdmin()
    {
        $role = $this->role;
        return ($role->name == "admin");
    }

    public function IsCustomer()
    {
        $role = $this->role;
        return ($role->name == "customer");
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id');
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return "remember_token";
    }
}
