@extends('Backend.Layout.masterAdmin')

@section('adminContent')

<fieldset>
<legend>Categories</legend>
<a href="/admin/product/create">Create new product</a>
<hr />
    <div class="row">
        <div class="small-12 columns">
            <table class="dataTable">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Short description</th>
                        <th>Long description</th>
                        <th>Price</th>
                        <th>Category</th>
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
                            </td>
                            <td>
                                {{ $product->long_descr }}
                            </td>
                            <td>
                                € {{ $product->price }}
                            </td>
                            <td>
                                {{ $product->category->name }}
                            </td>
                            <td>
                                <a href="/admin/product/edit/{{ $product->id }}">Edit</a> |
                                <a href="/admin/product/delete/{{ $product->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</fieldset>
@stop