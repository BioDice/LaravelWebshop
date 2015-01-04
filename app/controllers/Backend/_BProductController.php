<?php

use App\Models\Product;
use Intervention\Image\Facades\Image;

class _BProductController extends FrontendController {

    public function Index()
    {
        $products = Product::get();

        return View::make('Backend.Product.index', compact('products'));
    }

    public function Create()
    {
        $categoryRepo = new CategoryRepo();
        $categories = $categoryRepo->GetArrayCategories();

        return View::make('Backend.Product.create', compact('categories'));
    }

    public function PostCreate()
    {
        if (Input::hasFile('image') && Input::file('image')->isValid()) {
            $imageName = $this->UploadImage();
            if (count($imageName) == 2) {
                // create the product
                $product = new Product();
                $product->fill(Input::all());
                $product->small_image = $imageName[0];
                $product->big_image = $imageName[1];
                $product->save();
            }
            else
            {
                return Redirect::back()
                    ->with('message', 'Incorrect File type')
                    ->withInput();
            }
        }

        return Redirect::route('admin.product.index');
    }

    public function Edit(Product $product)
    {
        $categoryRepo = new CategoryRepo();
        $categories = $categoryRepo->GetArrayCategories();

        return View::make('Backend.Product.edit', compact('product', 'categories'));
    }

    public function PostEdit()
    {
        $product = Product::find(Input::get('id'));
        $product->fill(Input::except('image'));

        if (Input::hasFile('image') && Input::file('image')->isValid()) {
            $imageName = $this->UploadImage();
            if (count($imageName) == 2) {
                $product->small_image = $imageName[0];
                $product->big_image = $imageName[1];
            }
            else
            {
                return Redirect::back()
                    ->with('message', 'Incorrect File type')
                    ->withInput();
            }
        }

        if (!$product->update()) {
            return Redirect::back()
                ->with('message', 'Something wrong happened while saving your model')
                ->withInput();
        }

        return Redirect::route('admin.product.index')
            ->with('message', 'Product updated.');
    }

    public function Delete(Product $product)
    {
        $product->delete();

        return Redirect::route('admin.product.index');
    }

    public function UploadImage()
    {
        $image = Input::file('image');
        $accExt = array('jpg', 'png', 'gif');

        $extension = $image->getClientOriginalExtension();

        if (!in_array($extension, $accExt))
        {
            return;
        }

        $destinationPath = 'public/images/products/';
        $filenameSmall = $image->getClientOriginalName();
        $filenameBig = basename($filenameSmall, ".". $extension) . "_big." . $extension;
        Image::make($image->getRealPath())->resize(70, 102)->save($destinationPath . $filenameSmall);
        Image::make($image->getRealPath())->resize(241, 350)->save($destinationPath . $filenameBig);

        return array($filenameSmall, $filenameBig);
    }
}