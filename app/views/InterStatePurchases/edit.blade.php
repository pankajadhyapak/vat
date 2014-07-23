@extends('master')
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <h4>Edit Inter Sale Purchase detail</h4>
</div>


<div class="col-md-8 col-md-offset-2  bs-component">

    <div class="well">

        {{ HTML::style('datepicker/classic.css') }}
        {{ HTML::style('datepicker/classic.date.css') }}
        {{ Form::model($purchase,['method'=>'PATCH', "url" => "/InterStatePurchases/$purchase->id"]) }}

        <div class="col-md-6">
            <div class="form-group {{ formErrorClass($errors, 'month'); }}">
                {{ Form::label('month', 'Select Month :',['class'=>'control-label']) }}
                {{ Form::selectMonth('month',\Carbon\Carbon::now()->month,['class'=>'form-control']) }}
                {{ $errors->first('month', '<span class="help-block">:message</span>') }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ formErrorClass($errors, 'year'); }}">
                {{ Form::label('year', 'Select Year :',['class'=>'control-label']) }}
                {{ Form::selectRange('year',\Carbon\Carbon::now()->year,\Carbon\Carbon::now()->year,null,['class'=>'form-control']) }}
                {{ $errors->first('year', '<span class="help-block">:message</span>') }}
            </div>
        </div>

        <!-- Seller Tin Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'seller_tin'); }}">
            {{ Form::label('seller_tin', 'Seller Tin :',['class'=>'control-label']) }}
            {{ Form::text('seller_tin', null, ['class' => 'form-control','maxlength'=>'11']) }}
            {{ $errors->first('seller_tin', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Name Of Seller Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'name_of_seller'); }}">
            {{ Form::label('name_of_seller', 'Name Of Seller :',['class'=>'control-label']) }}
            {{ Form::text('name_of_seller', null, ['class' => 'form-control']) }}
            {{ $errors->first('name_of_seller', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Address of Seller Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'address_of_seller'); }}">
            {{ Form::label('address_of_seller', 'Address of Seller :',['class'=>'control-label']) }}
            {{ Form::text('address_of_seller', null, ['class' => 'form-control']) }}
            {{ $errors->first('address_of_seller', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Invoice Number Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'invoice_number'); }}">
            {{ Form::label('invoice_number', 'Invoice Number :',['class'=>'control-label']) }}
            {{ Form::text('invoice_number', null, ['class' => 'form-control']) }}
            {{ $errors->first('invoice_number', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Invoice Date Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'invoice_date'); }}">
            {{ Form::label('invoice_date', 'Invoice Date :',['class'=>'control-label']) }}
            {{ Form::text('invoice_date', null, ['class' => 'form-control']) }}
            {{ $errors->first('invoice_date', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Quantity Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'quantity'); }}">
            {{ Form::label('quantity', 'Quantity :',['class'=>'control-label']) }}
            {{ Form::text('quantity', null, ['class' => 'form-control']) }}
            {{ $errors->first('quantity', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Net Value Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'net_value'); }}">
            {{ Form::label('net_value', 'Net Value :',['class'=>'control-label']) }}
            {{ Form::text('net_value', null, ['class' => 'form-control']) }}
            {{ $errors->first('net_value', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Tax Value Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'tax_value'); }}">
            {{ Form::label('tax_value', 'Tax Value :',['class'=>'control-label']) }}
            {{ Form::text('tax_value', null, ['class' => 'form-control']) }}
            {{ $errors->first('tax_value', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Other Charges Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'other_charges'); }}">
            {{ Form::label('other_charges', 'Other Charges :',['class'=>'control-label']) }}
            {{ Form::text('other_charges', null, ['class' => 'form-control']) }}
            {{ $errors->first('other_charges', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Total Value Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'total_value'); }}">
            {{ Form::label('total_value', 'Total Value :',['class'=>'control-label']) }}
            {{ Form::text('total_value', null, ['class' => 'form-control']) }}
            {{ $errors->first('total_value', '<span class="help-block">:message</span>') }}
        </div>



        <!-- Form Type Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'form_type'); }}">
            {{ Form::label('form_type', 'Form Type :',['class'=>'control-label']) }}
            {{ Form::FormType('form_type') }}
            {{ $errors->first('form_type', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Main Commodity Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'main_commodity'); }}">
            {{ Form::label('main_commodity', 'Main Commodity :',['class'=>'control-label']) }}
            {{ Form::main_commodity() }}
            {{ $errors->first('main_commodity', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Purpose Type Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'purpose_type'); }}">
            {{ Form::label('purpose_type', 'Purpose Type :',['class'=>'control-label']) }}
            {{ Form::PurposeType('purpose_type') }}
            {{ $errors->first('purpose_type', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Sub Commodity Description Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'sub_commodity_description'); }}">
            {{ Form::label('sub_commodity_description', 'Sub Commodity Description :',['class'=>'control-label']) }}
            {{ Form::selectRange('sub_commodity_description', 1, 9, null, ['class' => 'form-control']) }}
            {{ $errors->first('sub_commodity_description', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Button Form Input -->
        <div class="form-group">
            {{ Form::submit('Update This  ', ['class' => 'btn btn-primary']) }}
        </div>

        {{ Form::close() }}


    </div>

</div>

@stop