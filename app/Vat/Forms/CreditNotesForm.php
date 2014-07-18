<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class CreditNotesForm extends FormValidator{

    protected $rules = [
        'credit_note_no' => 'required',
        'credit_note_date' => 'required',
        'buyer_tin' => 'required',
        'name_of_the_buyer' => 'required',
        'net_value' => 'required',
        'tax_value' => 'required',
        'other_charges' => 'required',
        'total_charges' => 'required',
        'original_invoice_number' => 'required',
        'original_invoice_date' => 'required'

    ];

} 