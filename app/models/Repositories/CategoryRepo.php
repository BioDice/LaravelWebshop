<?php

use App\Models\Category;
use App\Models\Product;

class CategoryRepo {

    public function GetProductsFromCatAndSubCat(Category $category)
    {
        $products = Product::where('categoryID', '=', $category->id)->get();
        foreach ($category->children as $subCat) {
            $p = Product::where('categoryID', '=', $subCat->id)->get();
            $products = $products->merge($p);
        }
        return $products;
    }

    public function GetArrayCategories()
    {
        $categories = Category::get();
        $arrCats = array();
        foreach ($categories as $category)
        {
            $arrCats[$category->id] = $category->name;
        }

        return $arrCats;
    }
}