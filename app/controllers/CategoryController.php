<?php

class CategoryController extends FrontendController {

    public function Index($id)
    {
        $category = Category::with('products')->find($id);

        return View::make('Frontend.Category.categoryContent', compact('category'));
    }
}
