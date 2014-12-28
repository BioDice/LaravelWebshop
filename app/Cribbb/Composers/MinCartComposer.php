<?php namespace Cribbb\Composers;

class MiniCartComposer {

    public function compose($view)
    {
        $products = \Session::get('productsInCart');
        $count = 0;
        if ($products != null) { $count = count($products); }
        $view->with(['cartCount' => $count, 'products' => $products]);
    }
}