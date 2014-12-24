<?php

use App\Models\Category;

class CategoryController extends FrontendController {

    public function Index(Category $category)
    {
        $categoryRepo = new CategoryRepo();
        $products = $categoryRepo->GetProductsFromCatAndSubCat($category);
        return View::make('Frontend.Category.categoryContent', compact('category'), compact('products'));
    }
}
