@extends('Frontend.Layout.master')

@section('breadcrumbs', DaveJamesMiller\Breadcrumbs\Facade::render())

@section('content')

<div class="row">
    <div class="small-12 columns">

        <table style="width: 98%; margin-right: 10px;">
            <thead>
                <tr>
                    <th>
                        Description
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Amount
                    </th>
                    <th>
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $product)
                    <tr>
                        <td>
                             <a href="/productDetails/{{ $product->id }}">{{ HTML::image('images/products/' . $product->small_image, $product->short_descr, array()) }}</a>
                             {{ $product->short_descr }}
                        </td>
                        <td>
                            € {{ $product->price }}
                        </td>
                        <td>
                            {{ $product->pivot->amount }}
                        </td>
                        <td>
                            € {{ $product->pivot->amount * $product->price }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/profile">Back to profile</a>
    </div>
</div>

@stop