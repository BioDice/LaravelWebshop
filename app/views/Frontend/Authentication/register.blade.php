@extends('Frontend.Layout.master')

@section('content')
    <h1>Register</h1>
    <div class="Encapsulation" style="padding: 10px;">
        <div class="center row">
            <div class="section-container tabs" data-section="tabs">
                <section class="active">
                    <div class="content" data-section-content>
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="signup-panel">
                                    {{ Form::open(['route' => 'customer.create']) }}
                                        <div class="row collapse">
                                            <div class="small-2  columns">
                                                <span class="prefix"></span>
                                            </div>
                                            <div class="small-10  columns">
                                                {{ Form::text('firstname', null, ['placeholder' => 'firstname']) }}
                                            </div>
                                        </div>
                                        <div class="row collapse">
                                            <div class="small-2 columns">
                                                <span class="prefix"><i class="fi-torso"></i></span>
                                            </div>
                                            <div class="small-10  columns">
                                                {{ Form::text('insertion', null, ['placeholder' => 'insertion']) }}
                                            </div>
                                        </div>
                                        <div class="row collapse">
                                            <div class="small-2 columns">
                                                <span class="prefix"><i class="fi-torso"></i></span>
                                            </div>
                                            <div class="small-10  columns">
                                                {{ Form::text('surname', null, ['placeholder' => 'surname']) }}
                                            </div>
                                        </div>
                                        <div class="row collapse">
                                            <div class="small-2 columns">
                                                <span class="prefix"><i class="fi-torso"></i></span>
                                            </div>
                                            <div class="small-10  columns">
                                                {{ Form::text('address', null, ['placeholder' => 'address']) }}
                                            </div>
                                        </div>
                                        <div class="row collapse">
                                          <div class="small-2 columns">
                                              <span class="prefix"><i class="fi-torso"></i></span>
                                          </div>
                                          <div class="small-10  columns">
                                              {{ Form::text('postalcode', null, ['placeholder' => 'postalcode']) }}
                                          </div>
                                        </div>
                                        <div class="row collapse">
                                            <div class="small-2 columns">
                                                <span class="prefix"><i class="fi-torso"></i></span>
                                            </div>
                                            <div class="small-10  columns">
                                                {{ Form::text('username', null, ['placeholder' => 'username']) }}
                                            </div>
                                        </div>
                                        <div class="row collapse">
                                            <div class="small-2 columns ">
                                                <span class="prefix"><i class="fi-lock"></i></span>
                                            </div>
                                            <div class="small-10 columns ">
                                                {{ Form::password('password', ['placeholder' => 'Password']) }}
                                            </div>
                                        </div>
                                        <input type="submit" class="button" value="Sign Up!">
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop
