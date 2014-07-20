<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class LocalSalesForm extends FormValidator{

    protected $rules = [
        'purchase_tin' => 'required|regex:/^[2][9]\d{9}$/',
        'purchaser_name' => 'required|alpha',
        'invoice_no' => 'required|alphanum|regex:^(?=.*\d)^',
        'invoice_date' => 'required',
        'net_value_of_goods' => 'required|integer|min:1',
        'tax_value' => 'required|min:0',
        'other_charges' => 'required|min:0'
    ];

} 