@extends('Backend.Layout.masterAdmin')

@section('adminContent')
{{ HTML::script('js/Utilities/_AddOrderProduct.js') }}
{{ HTML::script('js/Utilities/NumberOnly.js') }}
{{ HTML::script('js/Utilities/ChangeAmountProduct.js') }}
<fieldset>
<legend>Edit order</legend>
{{ Form::model($order->user, array('route' => array('admin.order.post_edit', $order->id))) }}
{{ Form::hidden('id', $order->id, array('id' => 'OrderID')) }}
    <div class="row">
        <div class="small-12 medium-6 columns" style="border-right: 1px solid gray;">
            <h4>Customer data</h4>
            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Firstname
                        {{ Form::text('firstname', null, ['placeholder' => 'Firstname of customer']) }}
                        {{ $errors->first('firstname', '<span class="error">:message</span>') }}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Insertion
                        {{ Form::text('insertion', null, ['placeholder' => 'Insertion of customer']) }}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Lastname
                        {{ Form::text('lastname', null, ['placeholder' => 'Lastname of customer']) }}
                        {{ $errors->first('lastname', '<span class="error">:message</span>') }}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Address
                        {{ Form::text('address', null, ['placeholder' => 'Address of customer']) }}
                        {{ $errors->first('address', '<span class="error">:message</span>') }}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Postalcode
                        {{ Form::text('postalcode', null, ['placeholder' => 'Postalcode of customer']) }}
                        {{ $errors->first('postalcode', '<span class="error">:message</span>') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="small-12 medium-6 columns">
            <table class="dataTable">
                <thead>
                <tr>
                    <td>Product</td>
                    <td>Amount</td>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($order->products as $product)
                        <tr>
                            <td>
                                {{ $product->short_descr }}
                            </td>
                            <td>
                                <input type="number" id="amount_{{ $product->id }}" value="{{ $product->pivot->amount }}" onkeypress="return isNumber(event);" onchange="changeAmountOrder({{ $product->id }})" />
                            </td>
                            <td>
                                <a href="/admin/order/deleteproduct/{{ $order->id }}/{{ $product->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr />
            {{ Form::text('addProduct', null, ['id' => 'txtAddProduct', 'placeholder' => 'Keywords of the product']) }}
            <input type="button" id="btnSearch" class="button small" value="Search">
            <div id="searchProductsTable"></div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <a href="/admin/order">Back to list</a>
            <input type="submit" class="button right small" value="Update" />
        </div>
    </div>
{{ Form::close() }}
</fieldset>

@stop