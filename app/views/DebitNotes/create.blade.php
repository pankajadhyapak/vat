@extends('master')
{{ deleteAllFiles() }}
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <h4>Add New Debit Note</h4>
</div>

<div class="col-md-8 col-md-offset-2  bs-component">

    @include('forms/debit_note')

    @include('generateXml')

</div>
@stop