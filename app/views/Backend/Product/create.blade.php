@extends('Backend.Layout.masterAdmin')

@section('adminContent')

<fieldset>
<legend>Create product</legend>
{{ Form::open(['route' => 'admin.product.post_create', 'files' => true]) }}
    <div class="row">
        <div class="small-12 columns">

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Short description
                        {{ Form::text('short_descr', null, ['placeholder' => 'Short description of the product']) }}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Long description
                        {{ Form::textarea('long_descr', null, ['placeholder' => 'Long description of the product']) }}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Price
                        {{ Form::text('price', null, ['placeholder' => 'Price of the product']) }}
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
                    </label>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <a href="/admin/product">Back to list</a>
            <input type="submit" class="button right small" value="Create" />
        </div>
    </div>
{{ Form::close() }}
</fieldset>

@stop