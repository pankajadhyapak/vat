@extends('master')
{{ deleteAllFiles() }}
@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <h4>Welcome {{ Auth::user()->email }}</h4>
</div>

<div class="col-md-8 col-md-offset-2  bs-component row">

<div class="row">
    <div class="col-md-4 home one">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Local Purchases</h3>
            </div>
            <div class="panel-body">
                <span class="dash-num">{{ Auth::user()->LocalPurchase()->count() }}</span> Entries
                <a href="{{ URL::route('LocalPurchases.index') }}" class="btn btn-info">Show all Local Purchases</a>
                <br>
                <a href="{{ URL::route('LocalPurchases.create') }}" class="btn btn-info">Add New Local Purchases</a>
            </div>
        </div>

    </div>
    <div class="col-md-4 home">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Local Sales</h3>
            </div>
            <div class="panel-body">
                <span class="dash-num">{{ Auth::user()->LocalSales()->count() }}</span> Entries
                <a href="{{ URL::route('LocalSales.index') }}" class="btn btn-info">Show all Local Sales</a>
                <br>
                <a href="{{ URL::route('LocalSales.create') }}" class="btn btn-info">Add New Local Sales</a>
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
                <br>
                <a href="{{ URL::route('DebitNotes.create') }}" class="btn btn-info">Add New Debit Note</a>
            </div>
        </div>

    </div>

</div><!-- End row -->
    <div class="row">

        <div class="col-md-4 home">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Credit Notes</h3>
                </div>
                <div class="panel-body">
                    <span class="dash-num">{{ Auth::user()->CreditNotes()->count() }}</span> Entries
                    <a href="{{ URL::route('creditNotes.index') }}" class="btn btn-info">Show all Credit Notes</a>
                    <br>
                    <a href="{{ URL::route('creditNotes.create') }}" class="btn btn-info">Add New Credit Note</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 homeisp">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Inter State Purchases</h3>
                </div>
                <div class="panel-body">
                    <span class="dash-num">{{ Auth::user()->InterStatePurchases()->count() }}</span> Entries
                    <a href="{{ URL::route('InterStatePurchases.index') }}" class="btn btn-info">Show all Inter State Purchases</a>
                    <br>
                    <a href="{{ URL::route('InterStatePurchases.create') }}" class="btn btn-info">Add New Inter State Purchases</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 homeiss">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Inter State Sales</h3>
                </div>
                <div class="panel-body">
                    <span class="dash-num">{{ Auth::user()->InterStateSales()->count() }}</span> Entries
                    <a href="{{ URL::route('InterStateSales.index') }}" class="btn btn-info">Show all Inter State Sales</a>
                    <br>
                    <a href="{{ URL::route('InterStateSales.create') }}" class="btn btn-info">Add New Inter State Sales</a>
                </div>
            </div>
        </div>
    </div>

</div>
@stop
