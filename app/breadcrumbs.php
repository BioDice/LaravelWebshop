<?php

Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('about', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About us', route('about'));
});

Breadcrumbs::register('category', function($breadcrumbs, $category) {
    $breadcrumbs->parent('home');
    $cat = $category;
    while ($cat->parent != null)
    {
        $temp = $cat->parent;
        $breadcrumbs->push($temp->name, route('category', $temp->id));
        $cat = $temp;
    }

    $breadcrumbs->push($category->name, route('category', $category->id));
});

Breadcrumbs::register('product', function($breadcrumbs, $product) {
    $breadcrumbs->parent('category', $product->category);

    $breadcrumbs->push($product->short_descr, route('product', $product->id));
});