@extends('master')
{{ deleteAllFiles() }}
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <h4>Add New Local Sales</h4>
</div>

<div class="col-md-8 col-md-offset-2  bs-component">

    @include('forms/local_sales')

</div>
@stop