<?php namespace Vat\Forms;



use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator{

            public $rules = [
                'email' => 'required|email',
                'password' => 'required',
            ];

} 