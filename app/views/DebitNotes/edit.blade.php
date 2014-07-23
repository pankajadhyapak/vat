@extends('master')
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <h4>Purchase details</h4>
</div>

<div class="col-md-8 col-md-offset-2  bs-component">
    <div class="well">

        {{ HTML::style('datepicker/classic.css') }}
        {{ HTML::style('datepicker/classic.date.css') }}
        {{ Form::model($purchase,['method'=>'PATCH', "url" => "/DebitNotes/$purchase->id"]) }}

        <div class="col-md-6">
            <div class="form-group {{ formErrorClass($errors, 'month'); }}">
                {{ Form::label('month', 'Select Month :',['class'=>'control-label']) }}
                {{ Form::selectMonth('month',null,['class'=>'form-control']) }}
                {{ $errors->first('month', '<span class="help-block">:message</span>') }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ formErrorClass($errors, 'year'); }}">
                {{ Form::label('year', 'Select Year :',['class'=>'control-label']) }}
                {{ Form::selectRange('year',\Carbon\Carbon::now()->year,null,null,['class'=>'form-control']) }}
                {{ $errors->first('year', '<span class="help-block">:message</span>') }}
            </div>
        </div>

        <!-- Debit Note No Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'debit_note_no'); }}">
            {{ Form::label('debit_note_no', 'Debit Note No :',['class'=>'control-label']) }}
            {{ Form::text('debit_note_no', null, ['class' => 'form-control']) }}
            {{ $errors->first('debit_note_no', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Debit Note Date Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'debit_note_date'); }}">
            {{ Form::label('debit_note_date', 'Debit Note Date :',['class'=>'control-label']) }}
            {{ Form::text('debit_note_date', null, ['class' => 'form-control', 'id'=>'debit_note_date']) }}
            {{ $errors->first('debit_note_date', '<span class="help-block">:message</span>') }}
        </div>



        <!-- Seller TIN Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'seller_tin'); }}">
            {{ Form::label('seller_tin', 'Seller TIN :',['class'=>'control-label']) }}
            {{ Form::text('seller_tin', null, ['class' => 'form-control']) }}
            {{ $errors->first('seller_tin', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Name Of Seller Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'name_of_seller'); }}">
            {{ Form::label('name_of_seller', 'Name Of Seller :',['class'=>'control-label']) }}
            {{ Form::text('name_of_seller', null, ['class' => 'form-control']) }}
            {{ $errors->first('name_of_seller', '<span class="help-block">:message</span>') }}
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

        <!-- Total Charges Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'total_charges'); }}">
            {{ Form::label('total_charges', 'Total Charges :',['class'=>'control-label']) }}
            {{ Form::text('total_charges', null, ['class' => 'form-control']) }}
            {{ $errors->first('total_charges', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Original Invoice Number Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'original_invoice_number'); }}">
            {{ Form::label('original_invoice_number', 'Original Invoice Number :',['class'=>'control-label']) }}
            {{ Form::text('original_invoice_number', null, ['class' => 'form-control']) }}
            {{ $errors->first('original_invoice_number', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Original Invoice Date Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'original_invoice_date'); }}">
            {{ Form::label('original_invoice_date', 'Original Invoice Date :',['class'=>'control-label']) }}
            {{ Form::text('original_invoice_date', null, ['class' => 'form-control','id'=>'original_invoice_date']) }}
            {{ $errors->first('original_invoice_date', '<span class="help-block">:message</span>') }}
        </div>




        <!-- Button Form Input -->
        <div class="form-group">
            {{ Form::submit('Update This ', ['class' => 'btn btn-primary']) }}
        </div>

        {{ Form::close() }}


    </div>
</div>

@stop