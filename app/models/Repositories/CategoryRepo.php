<?php

use App\Models\Category;
use App\Models\Product;

class CategoryRepo {

    public function GetProductsFromCatAndSubCat(Category $category)
    {
        $products = Product::where('categoryID', '=', $category->id)->get();

        $retVal = array();
        array_push($retVal, $category);
        $this->SeekThroughCat($category, $retVal);

        foreach ($retVal as $cat) {
            $p = Product::where('categoryID', '=', $cat->id)->get();
            $products = $products->merge($p);
        }

//        foreach ($category->children as $subCat) {
//            $p = Product::where('categoryID', '=', $subCat->id)->get();
//            $products = $products->merge($p);
//        }
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

    public function GetOrderedCategories()
    {
        $categories = Category::where('parentID', '=', '0')->get();
        $retVal = array();

        foreach ($categories as $category)
        {
            array_push($retVal, $category);
            $this->SeekThroughCat($category, $retVal);

        }

        return $retVal;
    }

    public function SeekThroughCat($category, &$retVal)
    {
        foreach ($category->children as $child)
        {
            if (count($child->children) == 0)
            {
                array_push($retVal, $child);
            }
            else
            {
                array_push($retVal, $child);
                $this->SeekThroughCat($child, $retVal);
            }
        }
    }
}