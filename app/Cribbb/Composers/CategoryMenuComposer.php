<?php namespace Cribbb\Composers;

use App\Models\Category;

class CategoryMenuComposer {

    public function compose($view)
    {
        $categories = Category::with('children')->where('parentID', '=', '0')->get();

        $view->with('categories', $categories);
    }
}