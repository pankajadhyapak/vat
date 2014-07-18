<div class="well">

    {{ HTML::style('datepicker/classic.css') }}
    {{ HTML::style('datepicker/classic.date.css') }}
    {{ Form::open(['route' => 'creditNotes.store']) }}

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
            {{ Form::selectRange('year',$year,$year,null,['class'=>'form-control']) }}
            {{ $errors->first('year', '<span class="help-block">:message</span>') }}
        </div>
    </div>

    <!-- Credit Note No Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'credit_note_no'); }}">
        {{ Form::label('credit_note_no', 'Credit Note No :',['class'=>'control-label']) }}
        {{ Form::text('credit_note_no', null, ['class' => 'form-control']) }}
        {{ $errors->first('credit_note_no', '<span class="help-block">:message</span>') }}
    </div>

    <!-- Credit Note Date Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'credit_note_date'); }}">
        {{ Form::label('credit_note_date', 'Credit Note Date :',['class'=>'control-label']) }}
        {{ Form::text('credit_note_date', null, ['class' => 'form-control','id'=>'credit_note_date']) }}
        {{ $errors->first('credit_note_date', '<span class="help-block">:message</span>') }}
    </div>

    <!-- Buyer Tin Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'buyer_tin'); }}">
        {{ Form::label('buyer_tin', 'Buyer Tin :',['class'=>'control-label']) }}
        {{ Form::text('buyer_tin', null, ['class' => 'form-control']) }}
        {{ $errors->first('buyer_tin', '<span class="help-block">:message</span>') }}
    </div>

    <!-- Name Of The Buyer Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'name_of_the_buyer'); }}">
        {{ Form::label('name_of_the_buyer', 'Name Of The Buyer :',['class'=>'control-label']) }}
        {{ Form::text('name_of_the_buyer', null, ['class' => 'form-control']) }}
        {{ $errors->first('name_of_the_buyer', '<span class="help-block">:message</span>') }}
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
        {{ Form::text('original_invoice_date', null, ['class' => 'form-control', 'id'=>'original_invoice_date']) }}
        {{ $errors->first('original_invoice_date', '<span class="help-block">:message</span>') }}
    </div>


    <!-- Button Form Input -->
    <div class="form-group">
        {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}


</div>