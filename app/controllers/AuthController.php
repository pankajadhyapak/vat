<?php

use Vat\Forms\LoginForm;
use Vat\Forms\Registration;

class AuthController extends BaseController{


    private $login;
    private $register;

    function __construct(LoginForm $login, Registration $register)
    {
        $this->login = $login;
        $this->register = $register;
    }

    public function register()
    {
        $this->register->validate(Input::all());

        $newUser = User::create([
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'tin_number' => Input::get('tin_number'),
            'phone_no' => Input::get('phone_no'),
            'address' => Input::get('address'),
        ]);

        Auth::login($newUser);

        return Redirect::home()->with('flash_message','Registered Successfully');
    }

    public function login()
    {
        $this->login->validate(Input::all());

        if(Auth::attempt([
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ])){

            return Redirect::home()->with('flash_message','Logged In Successfully');
        }


        return Redirect::back()->withInput()->with('flash_message','Invalid Email or Password');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::to('/login')->with('flash_message','Logged Out Successfully');
    }
} 