<?php

use \Illuminate\Support\Facades\Request;
use App\Models\Customer;

class AccountController extends FrontendController {

    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function Login()
    {
        return View::make('Frontend.Authentication.login');
    }

    public function Register()
    {
        return View::make('Frontend.Authentication.register');
    }

    public function StoreCustomer(Request $request, Customer $customer)
    {
        $customer->create($request->all());

        return redirect()->route('home');
    }
}
