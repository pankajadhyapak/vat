<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class InterStateSalesForm extends FormValidator{

    protected $rules = [
        'month' => 'required',
        'year' => 'required',
        'seller_tin' => 'required|integer|digits:11',
        'name_of_seller' => 'required|alpha|max:30',
        'address_of_seller' => 'required',
        'invoice_number' => 'required|alphanum|regex:^(?=.*\d)^',
        'invoice_date' => 'required',
        'quantity' => 'required|numeric|min:0',
        'net_value' => 'required|numeric|min:1',
        'tax_value' => 'required|numeric|min:0',
        'other_charges' => 'required|numeric|min:0',
        'total_value' => 'required|min:0',
        'form_type' => 'required',
        'main_commodity' => 'required'
    ];

} 