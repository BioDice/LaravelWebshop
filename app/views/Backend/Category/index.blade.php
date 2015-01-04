@extends('Backend.Layout.masterAdmin')

@section('adminContent')

<fieldset>
<legend>Categories</legend>
<a href="/admin/category/create">Create new category</a>
<hr />
    <div class="row">
        <div class="small-12 columns">
            <table class="dataTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Parent</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                            @if ($category->parent != null)
                                {{ $category->parent->name }}
                            @endif
                            </td>
                            <td>
                                <a href="/admin/category/edit/{{ $category->id }}">Edit</a> |
                                <a href="/admin/category/delete/{{ $category->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</fieldset>
@stop