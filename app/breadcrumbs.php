<?php

Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('about', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About us', route('about'));
});

Breadcrumbs::register('cart.content', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Cart', route('cart.content'));
});

Breadcrumbs::register('checkout.checkout', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Checkout', route('checkout.checkout'));
});

Breadcrumbs::register('checkout.create', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Final', route('checkout.create'));
});

Breadcrumbs::register('home.search', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Search', route('home.search'));
});

Breadcrumbs::register('customer.profile', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Profile', route('customer.profile'));
});

Breadcrumbs::register('customer.checkorder', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Order', route('customer.checkorder'));
});

Breadcrumbs::register('category', function($breadcrumbs, $category) {
    $breadcrumbs->parent('home');
    $cat = $category;
    while ($cat->parent != null)
    {
        $temp = $cat->parent;
        //array_unshift($test, {'title' => $temp->name, 'url' => route('category', $temp->id)});
        $breadcrumbs->unshift($temp->name, route('category', $temp->id));
        $cat = $temp;
    }

    //$breadcrumbs->push($temp->name, route('category', $temp->id));

    $breadcrumbs->push($category->name, route('category', $category->id));
});

Breadcrumbs::register('product', function($breadcrumbs, $product) {
    $breadcrumbs->parent('category', $product->category);

    $breadcrumbs->push($product->short_descr, route('product', $product->id));
});