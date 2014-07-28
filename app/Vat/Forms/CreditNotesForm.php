<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class CreditNotesForm extends FormValidator{

    protected $rules = [

        'credit_note_no' => 'required|unique:creditNotes,credit_note_no',
        'credit_note_date' => 'required',
        'buyer_tin' => 'required|regex:/^[2][9]\d{9}$/',
        'name_of_the_buyer' => 'required|alpha',
        'net_value' => 'required|integer|min:1',
        'tax_value' => 'required|integer|min:0',
        'other_charges' => 'required|integer|min:0',
        'total_value' => 'required|integer|min:0',
        'original_invoice_number' => 'required|cexists:LocalSales,invoice_no,InterStateSales,invoice_number',
        // InterStateSales or localSales
        'original_invoice_date' => 'required|exists:local_purchases,invoice_date'

    ];

    protected $messages = [
        'original_invoice_number.cexists' => 'Invoice Number Does not Exists in LocalSales OR InterStateSales'
    ];

    public function validateUpdate(array $input)
    {
        array_shift($this->rules);
        $this->validate($input);
    }



}