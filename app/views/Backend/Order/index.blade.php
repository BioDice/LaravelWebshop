@extends('Backend.Layout.masterAdmin')

@section('adminContent')

<fieldset>
<legend>Orders</legend>
    <div class="row">
        <div class="small-12 columns">
            <table class="dataTable">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Created</th>
                        <th>Amount of products</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>
                                {{{ $order->user->firstname . " " .$order->user->insertion . " " .$order->user->lastname }}}
                            </td>
                            <td>
                                {{{ $order->created_at }}}
                            </td>
                            <td>
                                <?php
                                    $totalProducts = 0;
                                    foreach($order->products as $product)
                                    {
                                        $totalProducts += $product->pivot->amount;
                                    }
                                ?>
                                {{{ $totalProducts }}}
                            </td>
                            <td>
                                <a href="/admin/order/edit/{{ $order->id }}">Edit</a> |
                                <a href="/admin/order/{{ $order->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</fieldset>

@stop