<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $guarded = array();

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
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
}
