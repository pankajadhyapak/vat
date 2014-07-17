@extends('master')

@section('content')


<div class="row" style="margin-top:10%">
    <div class="col-md-4 col-sm-offset-2 col-md-offset-4">
        {{ Form::open(['url' => 'login']) }}
        <fieldset>
            <div class="logo-login" style="text-align: center; padding: 10px;">

                <h4>Welcome Back !! Login </h4>

            </div
            <hr class="colorgraph">

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


            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
            </span>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="submit" class="btn btn-success btn-block" value="Sign In">
                </div>

            </div>
        </fieldset>
        {{ Form::open() }}
    </div>
</div>
@stop