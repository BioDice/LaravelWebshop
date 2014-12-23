<?php

class HomeController extends FrontendController {

	public function Home()
	{
        $products = \Product::get();

		return View::make('Frontend.Home.home', compact('products'));
	}

    public function About()
    {
        return View::make('Frontend.Home.about');
    }
}
