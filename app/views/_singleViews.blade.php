<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-responsive" >
        <tr>
            <td><strong>Month :</strong></td>
            <td>{{ $purchase->month }}</td>
            <td><strong>Year :</strong></td>
            <td>{{ $purchase->year }}</td>
        </tr>
            </table>
        <table class="table table-bordered table-responsive" >

            @foreach($purchase->toArray() as $key => $items )
            @if( ($key == 'id') ||($key == 'month') ||($key == 'year') || ($key == 'user_id') || ($key == 'created_at') || ($key == 'updated_at'))
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