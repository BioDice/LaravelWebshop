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
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartEntries as $cartEntry)
                <tr>
                    <td>
                         <a href="/productDetails/{{ $cartEntry->GetProduct()->id }}">{{ HTML::image('images/products/' . $cartEntry->GetProduct()->small_image, $cartEntry->GetProduct()->short_descr, array()) }}</a>
                         {{ $cartEntry->GetProduct()->short_descr }}
                    </td>
                    <td>
                        € {{ $cartEntry->GetProduct()->price }}
                    </td>
                    <td>
                        {{ $cartEntry->GetAmount() }}
                    </td>
                    <td>
                        € {{ $cartEntry->GetTotalPrice() }}
                    </td>
                    <td>
                        <a href="">Verwijderen</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@stop