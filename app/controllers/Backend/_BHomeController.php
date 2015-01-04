<?php

class _BHomeController extends FrontendController {

    public function Home()
    {
        return View::make('Backend.Home.home');
    }
}