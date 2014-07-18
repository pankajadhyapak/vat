<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class DebitNotesForm extends FormValidator
{

    protected $rules = [
        'debit_note_no' => 'required',
        'debit_note_date' => 'required',
        'seller_tin' => 'required',
        'name_of_seller' => 'required',
        'net_value' => 'required',
        'tax_value' => 'required',
        'other_charges' => 'required',
        'total_charges' => 'required',
        'original_invoice_number' => 'required',
        'original_invoice_date' => 'required'
    ];
} 