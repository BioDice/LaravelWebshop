<?php namespace Cribbb\Composers;

use App\Models\Category;

class CategoryMenuComposer {

    public function compose($view)
    {
//        $categories = Category::with('children')->where('parentID', '=', '0')->get();
//        $categories = Category::where('parentID', '=', '0')->get();
        $categoryRepo = new \CategoryRepo();
        $categories = $categoryRepo->GetOrderedCategories();

        $view->with('categories', $categories);
    }
}