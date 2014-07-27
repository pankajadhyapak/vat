<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $guarded = array();

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	protected $hidden = array('password', 'remember_token');

    public function LocalPurchase()
    {
        return $this->hasMany('LocalPurchase');
    }

    public function LocalSales()
    {
        return $this->hasMany('LocalSale');
    }

    public function CreditNotes()
    {
        return $this->hasMany('CreditNote');
    }

    public function DebitNotes()
    {
        return $this->hasMany('DebitNote');
    }

    public function InterStatePurchases()
    {
        return $this->hasMany('InterStatePurchase');
    }

    public function InterStateSales()
    {
        return $this->hasMany('InterStateSale');
    }
}
