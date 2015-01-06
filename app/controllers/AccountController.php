<?php

use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;

class AccountController extends FrontendController {

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function Login()
    {
        return View::make('Frontend.Authentication.login');
    }

    public function LogInUser()
    {
        /* Get the login form data using the 'Input' class */
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        // Try to authenticate the credentials
        if(Auth::attempt($userdata))
        {
            // we are now logged in
            $user = Auth::user();
            if ($user->IsAdmin())
                return Redirect::route('admin.dashboard');
            else
                return Redirect::to('home');
        }
        else
        {
            return Redirect::to('login');
        }
    }

    public function LogOutUser()
    {
        Auth::logout();
        return Redirect::to('home');
    }

    public function Register()
    {
        return View::make('Frontend.Authentication.register');
    }

    public function CheckOrder(Order $order)
    {
        return View::make('Frontend.Authentication.checkOrder', compact('order'));
    }

    public function Profile()
    {
        $user = Auth::user();
        $orders = $user->orders;

        return View::make('Frontend.Authentication.profile', compact('user', 'orders'));
    }

    public function UpdateCustomer()
    {
        $user = Auth::user();

        $rules = array(
            'firstname' => array('required'),
            'lastname' => array('required'),
            'address' => array('required'),
            'postalcode' => array('required')
        );
        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            // Validation has failed.
            return Redirect::to('profile')->withInput()->withErrors($validation);
        }

        $user->fill(Input::all());
        $user->update();

        return Redirect::back();
    }

    public function StoreCustomer()
    {
        $rules = array(
            'username' => array('required'),
            'password' => array('required'),
            'firstname' => array('required'),
            'lastname' => array('required'),
            'address' => array('required'),
            'postalcode' => array('required')
        );
        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            // Validation has failed.
            return Redirect::to('register')->withInput()->withErrors($validation);
        }

        $now = date('Y-m-d H:i:s');
        $user = new User;
        $user->username = Input::get('username');
        $user->password = \Hash::make(Input::get('password'));
        $user->roleID = Role::whereName('customer')->first()->id;
        $user->firstname= Input::get('firstname');
        $user->insertion = Input::get('insertion');
        $user->lastname = Input::get('lastname');
        $user->address = Input::get('address');
        $user->postalcode = Input::get('postalcode');
        $user->created_at = $now;
        $user->updated_at = $now;

        $user->save();

        $t = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($t)) {
            return Redirect::route('home');
        }
    }
}
