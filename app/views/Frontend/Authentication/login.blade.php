@extends('Frontend.Layout.master')

@section('content')
    <div class="row">
        <div class="small-10 medium-6 large-6 small-centered columns">
            <section id="loginForm" class="panel" style="padding: 20px; min-width: 300px; min-height: 300px;">
                {{ Form::open(array('action' => 'user.Login')) }}
                    <div class="row" style="text-align: center;">
                        <div class="small-12 small-centered columns">
                            Username
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            {{ Form::text('username', null, ['placeholder' => 'username']) }}
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="small-12 small-centered columns">
                            Password
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            {{ Form::password('password', null, ['placeholder' => 'password']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 small-centered columns">
                            <input type="submit" value="Log in" class="button" style="width:100%;" />
                        </div>
                    </div>
                {{ Form::close() }}
            </section>
        </div>
    </div>
@stop
