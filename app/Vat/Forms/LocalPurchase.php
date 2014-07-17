<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class LocalPurchase extends FormValidator{

    public $rules = [
        'seller_name' => 'required|alpha|max:30',
        'seller_tin'=>'required|regex:/^[2][9]\d{9}$/',
        'invoice_number'=>'required|alphanum|regex:^(?=.*\d)^',
        'invoice_date' => 'required',
        'invoice_date_submit' => 'required|date',
        'net_value' => 'required|integer|min:1',
        'tax_charged' =>'required|integer|min:1',
        'other_charges' => 'required|integer|min:0',
        'year'=>'required',
        'month'=>'required'
    ];

} 