@extends('Frontend.Layout.master')

@section('breadcrumbs', DaveJamesMiller\Breadcrumbs\Facade::render())

@section('content')

<div class="row">
    <div class="small-12 columns">
        {{ Form::open(['route' => 'checkout.create']) }}
            <h1>Customer data</h1>
            <div class="row">
                <div class="small-10  columns">
                    @if ($user == null)
                        {{ Form::text('firstname', null, ['placeholder' => 'firstname']) }}
                    @else
                        {{ Form::text('firstname', $user->firstname, ['placeholder' => 'firstname', 'disabled' => 'disabled']) }}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="small-10  columns">
                    @if ($user == null)
                        {{ Form::text('insertion', null, ['placeholder' => 'insertion']) }}
                    @else
                        {{ Form::text('insertion', $user->insertion, ['placeholder' => 'insertion', 'disabled' => 'disabled']) }}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="small-10  columns">
                    @if ($user == null)
                        {{ Form::text('surname', null, ['placeholder' => 'surname']) }}
                    @else
                        {{ Form::text('surname', $user->lastname, ['placeholder' => 'surname', 'disabled' => 'disabled']) }}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="small-10  columns">
                    @if ($user == null)
                        {{ Form::text('address', null, ['placeholder' => 'address']) }}
                    @else
                        {{ Form::text('address', $user->address, ['placeholder' => 'address', 'disabled' => 'disabled']) }}
                    @endif
                </div>
            </div>
            <div class="row">
              <div class="small-10  columns">
                  @if ($user == null)
                      {{ Form::text('postalcode', null, ['placeholder' => 'postalcode']) }}
                  @else
                      {{ Form::text('postalcode', $user->postalcode, ['placeholder' => 'postalcode', 'disabled' => 'disabled']) }}
                  @endif
              </div>
            </div>
            <input type="submit" class="button" value="Proceed payment">
        {{ Form::close() }}

    </div>
    <div class="small-12 columns">
         <table class="dataTable">
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
                </tr>
                @endforeach
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
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