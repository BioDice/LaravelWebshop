@extends('Frontend.Layout.master')

@section('breadcrumbs', DaveJamesMiller\Breadcrumbs\Facade::render('category', $category))

@section('content')

    <div class="center_title_bar">{{ $category->name }}</div>
    @foreach($products as $product)
        <div class="prod_box">
            <div class="top_prod_box"></div>
            <div class="center_prod_box">
                <div class="product_title"><a href="/productDetails/{{ $product->id }}">{{ $product->short_descr }}</a></div>
                <div class="product_img"><a href="/productDetails/{{ $product->id }}">{{ HTML::image('images/products/' . $product->small_image, $product->name, array()) }}</a></div>
                <div class="prod_price"><span class="price">€ {{ $product->price }}</span></div>
            </div>
            <div class="bottom_prod_box"></div>
            <div class="prod_details_tab">
                <a href="/addproduct/{{ $product->id }}" title="header=[Add to cart] body=[&nbsp;] fade=[on]">
                    {{ HTML::image('images/cart.gif', 'cart', array('class' => 'left_bt')) }}
                </a>
                <a href="/productDetails/{{ $product->id }}" class="prod_details">details</a>
            </div>
        </div>
    @endforeach

@stop