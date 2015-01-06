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
                                         <div class="row">
                                            <div class="small-12 columns">
                                                <label>
                                                    Firstname
                                                    {{ Form::text('firstname', Input::old('firstname'), ['placeholder' => 'Firstname of customer']) }}
                                                    {{ $errors->first('firstname', '<span class="error">:message</span>') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label>
                                                    Insertion
                                                    {{ Form::text('insertion', Input::old('insertion'), ['placeholder' => 'Insertion of customer']) }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label>
                                                    Lastname
                                                    {{ Form::text('lastname', Input::old('lastname'), ['placeholder' => 'Lastname of customer']) }}
                                                    {{ $errors->first('lastname', '<span class="error">:message</span>') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label>
                                                    Address
                                                    {{ Form::text('address', Input::old('address'), ['placeholder' => 'Address of customer']) }}
                                                    {{ $errors->first('address', '<span class="error">:message</span>') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label>
                                                    Postalcode
                                                    {{ Form::text('postalcode', Input::old('postalcode'), ['placeholder' => 'Postalcode of customer']) }}
                                                    {{ $errors->first('postalcode', '<span class="error">:message</span>') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label>
                                                    Username
                                                    {{ Form::text('username', Input::old('username'), ['placeholder' => 'Username']) }}
                                                    {{ $errors->first('username', '<span class="error">:message</span>') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label>
                                                    Password
                                                    {{ Form::password('password', ['placeholder' => 'Password']) }}
                                                    {{ $errors->first('password', '<span class="error">:message</span>') }}
                                                </label>
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
