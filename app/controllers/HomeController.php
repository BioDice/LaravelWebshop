<?php

class HomeController extends Controller {

	public function Home()
	{
        $menuItems = MenuItem::get();

		return View::make('Home.home')->nest('menu', 'Menu.menu', compact('menuItems'));
	}

    public function About()
    {
        return View::make('Home.about');
    }
}
