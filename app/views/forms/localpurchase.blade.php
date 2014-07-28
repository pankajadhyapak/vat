<div class="well">

    {{ HTML::style('datepicker/classic.css') }}
    {{ HTML::style('datepicker/classic.date.css') }}
    {{ Form::open(['route' => 'LocalPurchases.store']) }}

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
        <!-- Seller Tin Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'seller_tin'); }}">
            {{ Form::label('seller_tin', 'Seller Tin :',['class'=>'control-label']) }}
            {{ Form::text('seller_tin', null, ['class' => 'form-control','maxlength'=>'11']) }}
            {{ $errors->first('seller_tin', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Seller Name Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'seller_name'); }}">
            {{ Form::label('seller_name', 'Seller Name :',['class'=>'control-label']) }}
            {{ Form::text('seller_name', null, ['class' => 'form-control','maxlength'=>'30']) }}
            {{ $errors->first('seller_name', '<span class="help-block">:message</span>') }}
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
            {{ Form::text('invoice_date', null, ['class' => 'form-control','id'=>'idate']) }}
            {{ $errors->first('invoice_date', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Net Value Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'net_value'); }}">
            {{ Form::label('net_value', 'Net Value :',['class'=>'control-label']) }}
            {{ Form::text('net_value', null, ['class' => 'form-control']) }}
            {{ $errors->first('net_value', '<span class="help-block">:message</span>') }}
        </div>

        <!-- Tax Charged Form Input -->
        <div class="form-group {{ formErrorClass($errors, 'tax_charged'); }}">
            {{ Form::label('tax_charged', 'Tax Charged :',['class'=>'control-label']) }}
            {{ Form::text('tax_charged', null, ['class' => 'form-control','id' => 'tax_value']) }}
            {{ $errors->first('tax_charged', '<span class="help-block">:message</span>') }}
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
        {{ Form::text('total_charges', null, ['id' => 'total_value','class' => 'form-control','disabled' =>'disabled']) }}
        {{ $errors->first('total_charges', '<span class="help-block">:message</span>') }}

        @include('jsAdder')

    </div>

        <!-- Button Form Input -->
        <div class="form-group">
            {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}


</div>