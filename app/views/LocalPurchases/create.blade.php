@extends('master')
{{ deleteAllFiles() }}
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <h4>Add New Local Purchases </h4>
</div>

<div class="col-md-8 col-md-offset-2  bs-component">

    @include('forms/localpurchase')

    @include('generateXml')

</div>
@stop