<div class="well">

    {{ HTML::style('datepicker/classic.css') }}
    {{ HTML::style('datepicker/classic.date.css') }}
    {{ Form::open(['route' => 'LocalSales.store']) }}

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

    <!-- Purchase Tin Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'purchase_tin'); }}">
        {{ Form::label('purchase_tin', 'Purchase Tin :',['class'=>'control-label']) }}
        {{ Form::text('purchase_tin', null, ['class' => 'form-control','maxlength'=>'11']) }}
        {{ $errors->first('purchase_tin', '<span class="help-block">:message</span>') }}
    </div>

    <!-- Purchaser Name Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'purchaser_name'); }}">
        {{ Form::label('purchaser_name', 'Purchaser Name :',['class'=>'control-label']) }}
        {{ Form::text('purchaser_name', null, ['class' => 'form-control']) }}
        {{ $errors->first('purchaser_name', '<span class="help-block">:message</span>') }}
    </div>

    <!-- Invoice No Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'invoice_no'); }}">
        {{ Form::label('invoice_no', 'Invoice No :',['class'=>'control-label']) }}
        {{ Form::text('invoice_no', null, ['class' => 'form-control']) }}
        {{ $errors->first('invoice_no', '<span class="help-block">:message</span>') }}
    </div>

    <!-- Invoice Date Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'invoice_date'); }}">
        {{ Form::label('invoice_date', 'Invoice Date :',['class'=>'control-label']) }}
        {{ Form::text('invoice_date', null, ['class' => 'form-control', 'id'=>'invoice_date']) }}
        {{ $errors->first('invoice_date', '<span class="help-block">:message</span>') }}
    </div>

    <!-- Net Value Of Goods Form Input -->
    <div class="form-group {{ formErrorClass($errors, 'net_value_of_goods'); }}">
        {{ Form::label('net_value_of_goods', 'Net Value Of Goods :',['class'=>'control-label']) }}
        {{ Form::text('net_value_of_goods', null, ['class' => 'form-control']) }}
        {{ $errors->first('net_value_of_goods', '<span class="help-block">:message</span>') }}
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

    <!-- Button Form Input -->
    <div class="form-group">
        {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}


</div>