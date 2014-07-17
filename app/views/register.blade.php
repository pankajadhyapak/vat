@extends('master')

@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    {{ Form::open(['url' => 'register']) }}
    <fieldset>
        <legend>Register</legend>

        <!-- Email Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'email'); }}">
            {{ Form::label('email', 'Email :',['class'=>'control-label']) }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
            {{ $errors->first('email', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Password Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'password'); }}">
            {{ Form::label('password', 'Password :', ['class'=>'control-label']) }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            {{ $errors->first('password', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Password Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'password'); }}">
            {{ Form::label('password_confirmation', 'Repeat Password :', ['class'=>'control-label']) }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
            {{ $errors->first('password_confirmation', '<span class="help-block">:message</span>') }}
        </div>


        
        
        
        

        <!-- Tin Number Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'tin_number'); }}">
            {{ Form::label('tin_number', 'Tin Number :',['class'=>'control-label']) }}
            {{ Form::text('tin_number', null, ['class' => 'form-control']) }}
            {{ $errors->first('tin_number', '<span class="help-block">:message</span>') }}
        </div>




        <!-- Address Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'address'); }}">
            {{ Form::label('address', 'Address :',['class'=>'control-label']) }}
            {{ Form::text('address', null, ['class' => 'form-control']) }}
            {{ $errors->first('address', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Phone No Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'phone_no'); }}">
            {{ Form::label('phone_no', 'Phone No :',['class'=>'control-label']) }}
            {{ Form::text('phone_no', null, ['class' => 'form-control']) }}
            {{ $errors->first('phone_no', '<span class="help-block">:message</span>') }}
        </div>


        <!-- Button Form Input -->
        <div class="form-group">
            {{ Form::submit('Register', ['class' => 'btn btn-primary']) }}
        </div>


    </fieldset>
    {{ Form::close() }}
</div>
@stop