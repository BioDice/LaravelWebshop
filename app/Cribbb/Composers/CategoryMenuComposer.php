<?php namespace Cribbb\Composers;

class CategoryMenuComposer {

    public function compose($view)
    {
        $categories = \Category::with('children')->where('parentID', '=', '0')->get();

        $view->with('categories', $categories);
    }
}