@extends('master')
{{ deleteAllFiles() }}
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <h4>Welcome {{ Auth::user()->email }}</h4>
</div>

<div class="col-md-8 col-md-offset-2  bs-component">

    <div class="col-md-4 home one">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Local Purchases</h3>
            </div>
            <div class="panel-body">
                <span class="dash-num">{{ Auth::user()->LocalPurchase()->count() }}</span> Entries
                <a href="{{ URL::route('LocalPurchases.index') }}" class="btn btn-info">Show all Local Purchases</a>
                <br><br>
                <a href="{{ URL::route('LocalPurchases.create') }}" class="btn btn-info">Add New Local Purchases</a>
            </div>
        </div>

    </div>
    <div class="col-md-4 home">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Debit Notes</h3>
            </div>
            <div class="panel-body">
                <span class="dash-num">{{ Auth::user()->DebitNotes()->count() }}</span> Entries
                <a href="{{ URL::route('DebitNotes.index') }}" class="btn btn-info">Show all Debit Notes</a>
                <br><br>
                <a href="{{ URL::route('DebitNotes.create') }}" class="btn btn-info">Add New Debit Note</a>
            </div>
        </div>

    </div>
    <div class="col-md-4 home">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Credit Notes</h3>
            </div>
            <div class="panel-body">
                <span class="dash-num">{{ Auth::user()->CreditNotes()->count() }}</span> Entries
                <a href="{{ URL::route('creditNotes.index') }}" class="btn btn-info">Show all Credit Notes</a>
                <br><br>
                <a href="{{ URL::route('creditNotes.create') }}" class="btn btn-info">Add New Credit Note</a>
            </div>
        </div>

    </div>

</div>
@stop