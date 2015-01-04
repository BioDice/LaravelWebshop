@extends('Backend.Layout.masterAdmin')

@section('adminContent')

<fieldset>
<legend>Create category</legend>
{{ Form::open(['route' => 'admin.category.post_create']) }}
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
                        {{ Form::select('parentID', array('default' => '') + $categories) }}
                    </label>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <a href="/admin/category">Back to list</a>
            <input type="submit" class="button right small" value="Create" />
        </div>
    </div>
{{ Form::close() }}
</fieldset>

@stop