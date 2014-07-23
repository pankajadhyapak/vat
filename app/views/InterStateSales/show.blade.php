@extends('master')

@section('content')



<div class="col-md-8 col-md-offset-2  bs-component">


    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Inter State Sales Details</h3>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">

            <ul class="list-group">
                <li class="list-group-item"><strong>Debit Note Id : </strong>{{ $purchase->id }}</li>

            </ul>

        </div>
    </div>

</div>



</div>
@stop