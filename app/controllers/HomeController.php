<?php

use App\Models\Product;

class HomeController extends FrontendController {

	public function Home()
	{
        $products = Product::get();

		return View::make('Frontend.Home.home', compact('products'));
	}

    public function About()
    {
        return View::make('Frontend.Home.about');
    }

    public function Search()
    {
        $products = Product::where(function($query) {
            $query->where('short_descr', 'like', '%'.Input::get('search').'%')->orWhere('long_descr', 'like', '%'.Input::get('search').'%');
        })->get();


        return View::make('Frontend.Home.search', compact('products'));
    }
}
