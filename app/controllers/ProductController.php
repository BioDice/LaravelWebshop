<?php

use \App\Models\Product;

class ProductController extends FrontendController {

    public function ViewDetails(Product $product)
    {
        return View::make('Frontend.Product.Details', compact('product'));
    }
}
