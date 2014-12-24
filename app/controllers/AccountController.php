<?php

class AccountController extends FrontendController {

    public function Login()
    {
        return View::make('Frontend.Authentication.login');
    }

    public function Register()
    {
        return View::make('Frontend.Authentication.register');
    }
}
