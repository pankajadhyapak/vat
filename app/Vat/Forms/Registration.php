<?php namespace Vat\Forms;


use Laracasts\Validation\FormValidator;

class Registration extends FormValidator{

    public $rules = [
        'password' => 'required|confirmed',
        'tin_number'=>'required|regex:/^[2][9]\d{9}$/',
        'email'=>'required|email|unique:users',
        'address' => 'required',
        'phone_no' => 'required|digits_between:10,12'
    ];

} 