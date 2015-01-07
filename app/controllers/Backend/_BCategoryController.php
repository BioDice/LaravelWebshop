<?php

use App\Models\Category;

class _BCategoryController extends FrontendController
{

    public function Index()
    {
        $categories = Category::get();

        return View::make('Backend.Category.index', compact('categories'));
    }

    public function Create()
    {
        $categoryRepo = new CategoryRepo();
        $categories = $categoryRepo->GetArrayCategories();

        return View::make('Backend.Category.create', compact('categories'));
    }

    public function PostCreate()
    {
        $rules = array(
            'name' => array('required')
        );

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            return Redirect::route('admin.category.create')->withInput()->withErrors($validation);
        }

        Category::create(Input::all());

        return Redirect::route('admin.category.index');
    }

    public function Edit(Category $category)
    {
        $categoryRepo = new CategoryRepo();
        $categories = $categoryRepo->GetArrayCategories();

        return View::make('Backend.Category.edit', compact('category', 'categories'));
    }

    public function PostEdit()
    {
        $category = Category::find(Input::get('id'));

        $rules = array(
            'name' => array('required')
        );

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            return Redirect::route('admin.category.edit', array($category->id))->withInput()->withErrors($validation);
        }

        if (!$category->update(Input::all())) {
            return Redirect::back()
                ->with('message', 'Something wrong happened while saving your model')
                ->withInput();
        }

        return Redirect::route('admin.category.index')
            ->with('message', 'Category updated.');
    }

    public function Delete(Category $category)
    {
        $category->delete();

        return Redirect::route('admin.category.index');
    }
}