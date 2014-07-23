<?php

class InterStatePurchase extends \Eloquent {

	protected $guarded = [];

    protected $table = 'InterStatePurchases';


    public function user()
    {
        return $this->belongsTo('User');
    }
}