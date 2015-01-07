@extends('Backend.Layout.masterAdmin')

@section('adminContent')

<fieldset>
<legend>Edit Product</legend>
{{ Form::model($product, array('route' => array('admin.product.post_edit', $product->id), 'files' => true)) }}
{{ Form::hidden('id', $product->id) }}
    <div class="row">
            <div class="small-12 columns">

                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Short description
                            {{ Form::text('short_descr', Input::old('short_descr'), ['placeholder' => 'Short description of the product']) }}
                            {{ $errors->first('short_descr', '<span class="error">:message</span>') }}
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Long description
                            {{ Form::textarea('long_descr', Input::old('long_descr'), ['placeholder' => 'Long description of the product']) }}
                            {{ $errors->first('long_descr', '<span class="error">:message</span>') }}
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Price
                            {{ Form::text('price', Input::old('price'), ['placeholder' => 'Price of the product']) }}
                            {{ $errors->first('price', '<span class="error">:message</span>') }}
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Category
                            {{ Form::select('categoryID', $categories) }}
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <label>
                            Image
                            {{ Form::file('image') }}
                            <br />
                            {{ HTML::image('images/products/' . $product->small_image, $product->short_descr, array()) }}
                        </label>
                    </div>
                </div>

            </div>
        </div>
    <div class="row">
        <div class="small-12 columns">
            <a href="/admin/product">Back to list</a>
            <input type="submit" class="button right small" value="Update" />
        </div>
    </div>
{{ Form::close() }}
</fieldset>

@stop