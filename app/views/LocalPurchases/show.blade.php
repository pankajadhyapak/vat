@extends('master')

@section('content')



<div class="col-md-8 col-md-offset-2  bs-component">


    <div class="panel panel-info">
	  <div class="panel-heading">
		  <h3 class="panel-title">Purchase Details</h3>
	</div>
    </div>
  <div class="panel-body">
  	<div class="table-responsive">
  	
  	<ul class="list-group">
	  <li class="list-group-item"><strong>Purchase Id : </strong>{{ $purchase->id }}</li>
	  <li class="list-group-item"><strong>Seller Name  : </strong>{{ $purchase->seller_name }}</li>
	  <li class="list-group-item"><strong>Invoice Number : </strong>{{ $purchase->invoice_number }}</li>
	  <li class="list-group-item"><strong>Invoice Date : </strong>{{ $purchase->invoice_date }}</li>
	  <li class="list-group-item"><strong>Net Value : </strong>{{ $purchase->net_value }}</li>
	  <li class="list-group-item"><strong>Tax Charged : </strong>{{ $purchase->tax_charged }}</li>
	  <li class="list-group-item"><strong>Month : </strong>{{ getMonth($purchase->month) }}</li>
	  <li class="list-group-item"><strong>Year : </strong>{{ $purchase->year }}</li>
	  <li class="list-group-item"><strong>Other Charges  : </strong>{{ $purchase->other_charges }}</li>
	  <li class="list-group-item"><strong>Created at: </strong>{{ $purchase->created_at->format('d/m/Y') }}</li>
  </ul>
      
    </div>
  </div>

</div>



</div>
@stop