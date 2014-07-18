<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('home') }}">VAT e-filing System</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a>
                            Welcome {{ Auth::user()->email }}
                        </a>
                    </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bills <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    	<li><a data-target="#navModal" data-toggle="modal">Add New Bill</a></li>
                        <li><a href="{{ URL::route('LocalPurchases.index') }}">Local Purchases</a></li>
                        <li><a href="{{ URL::route('DebitNotes.index') }}">Debit Notes </a></li>
                        <li><a href="{{ URL::route('creditNotes.index') }}">Credit Notes</a></li>

                    </ul>
                </li>
                    <li>
                        <a href="/logout">Logout
                        </a>
                    </li>
                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>

@include('_modalNav')
