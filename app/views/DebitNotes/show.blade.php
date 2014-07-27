@extends('master')

@section('content')


<div class="col-md-8 col-md-offset-2  bs-component" xmlns="http://www.w3.org/1999/html">


    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Purchase Details</h3>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-responsive" >

                @foreach($purchase->toArray() as $key => $items )
                @if( ($key == 'id') || ($key == 'user_id') || ($key == 'created_at') || ($key == 'updated_at'))
                @continue
                @endif
                <tr>
                    <td><strong>
                            {{ ucwords($text = preg_replace('/_ */i', ' ', $key)) }}
                        </strong> : </td>
                    <td> {{ $items }}</td>
                </tr>


                @endforeach
            </table>

        </div>
    </div>

</div>



</div>
@stop