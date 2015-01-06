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
                             <a href="/productDetails/{{ $cartEntry->GetProduct()->id }}">{{ HTML::image('images/products/' . $cartEntry->GetProduct()->small_image, $cartEntry->GetProduct()->short_descr, array()) }}</a><br/ >
                             {{ $cartEntry->GetProduct()->short_descr }}
                        </td>
                        <td>
                            € {{ $cartEntry->GetProduct()->price }}
                        </td>
                        <td>
                            <input type="number" id="txtValue_{{ $cartEntry->GetProduct()->id }}" value="{{ $cartEntry->GetAmount() }}" onkeypress="return isNumber(event);" onchange="changeAmount({{ $cartEntry->GetProduct()->id }})" />
                        </td>
                        <td>
                            € {{ $cartEntry->GetTotalPrice() }}
                        </td>
                        <td>
                            <a href="deleteproduct/{{ $cartEntry->GetProduct()->id }}">Verwijderen</a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2"></td>
                    <td>
                    <?php
                        $count = 0;
                        if ($cartEntries != null)
                        {
                            foreach ($cartEntries as $cartEntry)
                            {
                                $count += $cartEntry->GetAmount();
                            }
                        }
                        ?>
                    {{ $count }}
                    </td>
                    <td>
                        <?php
                            $totalPrice = 0;
                            if ($cartEntries != null) {
                                foreach ($cartEntries as $cartEntry) {
                                    $totalPrice += $cartEntry->GetTotalPrice();
                                }
                            }
                        ?>
                        € {{ $totalPrice }}
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

@stop