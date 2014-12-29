@extends('Frontend.Layout.master')

@section('breadcrumbs', DaveJamesMiller\Breadcrumbs\Facade::render('product', $product))

@section('content')
    <!-- start content -->
    <div>
        <!-- start header container -->
        <div >
            <h1>{{ $product->short_descr }}</h1>
            <hr />
        </div>
        <!-- end header container -->

        <!-- start details container -->
        <div>
            <!-- start image container -->
            <div style="float: left; width: 50%;">
                {{ HTML::image('images/products/' . $product->big_image, $product->short_descr, array()) }}
            </div>
            <!-- end image container -->

            <!-- start right content -->
            <div style="float: right; width: 50%;">
                <p>
                    <h2>€ {{ $product->price }}</h2>
                </p>
                <p>
                    {{ $product->long_descr }}
                </p>
                <br />
                {{ HTML::link('addproduct/'. $product->id. '', 'Bestel nu!', array('class' => 'defaultButton'))}}
            </div>
            <!-- end right content -->
        </div>
        <!-- end details container -->
    </div>
    <!-- end content -->
@stop