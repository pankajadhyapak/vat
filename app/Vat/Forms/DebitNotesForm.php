<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class DebitNotesForm extends FormValidator
{

    protected $rules = [
        'debit_note_no' => 'required|unique:DebitNotes',
        'debit_note_date' => 'required',
        'seller_tin' => 'required|regex:/^[2][9]\d{9}$/',
        'name_of_seller' => 'required|alpha',
        'net_value' => 'required|integer|min:1',
        'tax_value' => 'required|integer|min:0',
        'other_charges' => 'required|integer|min:0',
        'total_charges' => 'required|integer|min:0',
        'original_invoice_number' => 'required|exists:local_purchases,invoice_number',
        'original_invoice_date' => 'required|exists:local_purchases,invoice_date'
    ];
} 