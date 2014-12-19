<?php

class HomeController extends FrontendController {

	public function Home()
	{
		return View::make('Frontend.Home.home');
	}

    public function About()
    {
        return View::make('Frontend.Home.about');
    }
}
