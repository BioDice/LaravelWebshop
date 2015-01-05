@extends('Backend.Layout.masterAdmin')

@section('adminContent')

<fieldset>
<legend>Edit category</legend>
{{ Form::model($category, array('route' => array('admin.category.post_edit', $category->id))) }}
{{ Form::hidden('id', $category->id) }}
    <div class="row">
        <div class="small-12 columns">

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Name
                        {{ Form::text('name', null, ['placeholder' => 'Name of category']) }}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <label>
                        Parent
                        {{ Form::select('parentID', array('default' => '') + $categories, $category->parentID) }}
                    </label>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <a href="/admin/category">Back to list</a>
            <input type="submit" class="button right small" value="Update" />
        </div>
    </div>
{{ Form::close() }}
</fieldset>

@stop