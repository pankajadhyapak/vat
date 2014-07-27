@extends('master')

@section('content')

<div class="col-md-8 col-md-offset-2 well bs-component">
    <div class="col-md-9">
        <h4>All Debit Notes </h4>
    </div>
    <div class="col-md-3">
        <button class="btn btn-success" data-toggle="modal" data-target="#xmlgen">Generate Xml </button>
    </div></div>

<div class="col-md-8 col-md-offset-2  bs-component">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td><strong>Name</strong></td>
            <td><strong>Date</strong></td>
            <td><strong>Total Amount</strong></td>
            <td><strong>Actions</strong></td>
        </tr>
        </thead>
        <tbody><style>
            .btn-sm{ margin-bottom: 10px; }
        </style>
        @foreach($debitPurchases as $key => $purchases)
        <tr>
            <td>{{ $purchases->name_of_seller }}</td>
            <td>{{ $purchases->debit_note_date }}</td>
            <td>{{ ( ($purchases->net_value) + ($purchases->tax_value) + ($purchases->other_charges) ) }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success btn-sm" href="{{ URL::to('DebitNotes/' . $purchases->id) }}">View</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info btn-sm" href="{{ URL::to('DebitNotes/' . $purchases->id . '/edit') }}">Edit</a>
                <a class="btn btn-small btn-danger btn-sm" href="{{ URL::to('DebitNotes/' . $purchases->id . '/delete') }}" onclick="javascript:return confirm('Are you sure you want to delete ?')"
                    >Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>





</div>

@stop