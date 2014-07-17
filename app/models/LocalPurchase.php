<?php

class LocalPurchase extends \Eloquent {

    protected $guarded = array();

    protected $table="local_purchases";
    

    public function user()
    {
        return $this->belongsTo('User');
    }
}
    