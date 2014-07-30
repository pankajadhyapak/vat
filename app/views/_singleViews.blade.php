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
            @if( ($key == 'main_commodity') || ($key == 'purpose_type') ||($key == 'month') ||($key == 'year') || ($key == 'user_id') || ($key == 'created_at') || ($key == 'updated_at') || ($key == 'total_charges')|| ($key == 'total_value'))
            @continue
            @endif
            <tr>
                <td><strong>
                        {{ ucwords($text = preg_replace('/_ */i', ' ', $key)) }}
                    </strong> : </td>
                <td> {{ $items }}</td>
            </tr>
            
            @endforeach
            
            
            
            @if($purchase->main_commodity )
            <tr>
	            <td><strong>Main Commodity :</strong></td>
	            <td>{{ convertToString($purchase->main_commodity) }}</td>
            </tr>
            @endif
            
            @if($purchase->purpose_type )
            <tr>
	            <td><strong>Purpose Type :</strong></td>
	            <td>{{ convertPurposeType($purchase->purpose_type) }}</td>
            </tr>
            <tr>
            @endif
	            <td><strong>Total Amount :</strong></td>
	            <td>{{ ( ( $purchase->other_charges ) + ($purchase->tax_value)  + ( isset($purchase->net_value_of_goods) ? $purchase->net_value_of_goods:$purchase->net_value ) )}}</td>
            </tr>
        </table>

    </div>
</div>