<table class="dataTable">
    <thead>
    <tr>
        <th>Image</th>
        <th>Short description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    @foreach($products as $product)
    <tr>
        <td>
            {{ HTML::image('images/products/' . $product->small_image, $product->short_descr, array()) }}
        </td>
        <td>
            {{ $product->short_descr }}
        <td>
            <a href="/admin/order/addproduct/{{ $order->id }}/{{ $product->id }}">Add</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>