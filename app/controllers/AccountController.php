<?php

class AccountController extends FrontendController {

    public function Login()
    {
        $menuItems = MenuItem::get();

        return View::make('Frontend.Authentication.login');
    }

    public function Register()
    {
        return View::make('Frontend.Authentication.register');
    }
}
