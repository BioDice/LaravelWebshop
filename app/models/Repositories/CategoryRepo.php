<?php

class CategoryRepo {

    public function GetOrderedCategories()
    {
        $categories = \Category::where('parentID', '=', '0')->get();

        return $categories;
    }

    public function GetChildCategories($id)
    {

    }

}