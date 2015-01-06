@extends('Frontend.Layout.master')

@section('breadcrumbs', DaveJamesMiller\Breadcrumbs\Facade::render())

@section('content')
    <div class="row">
        <div class="small-12 columns">
            <div class="row">
                <div class="small-6 columns">
                    {{ Form::model($user, array('route' => array('customer.update', $user->id))) }}
                        <h4>Customer data</h4>
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
                        {{ Form::submit('Update', ['class' => 'defaultButton']) }}
                    {{ Form::close() }}
                </div>
                <div class="small-4 columns">
                    <h4>Orders</h4>
                    @foreach($orders as $order)
                        <a href="/profile/order/{{ $order->id }}">{{ $order->created_at }}</a>
                        <br />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
