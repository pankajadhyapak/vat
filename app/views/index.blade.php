@extends('master')
{{ deleteAllFiles() }}
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
	<div class="col-md-9">
		 <h4>Purchase details</h4>
	</div>
	<div class="col-md-3">
		 <button class="btn btn-success" data-toggle="modal" data-target="#xmlgen">Generate Xml </button>
	</div>
</div>

<div class="col-md-8 col-md-offset-2  bs-component">

    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active"><a href="#lp" data-toggle="tab">Local Purchase</a></li>
        <li class=""><a href="#ls" data-toggle="tab">Local Sale</a></li>

    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="lp">
            <p>
                @include('forms/localpurchase')
            </p>
        </div>
        <div class="tab-pane fade" id="ls">
            <p>
                @include('forms/localsales')
            </p>
        </div>

    </div>

@include('generateXml')

</div>
@stop