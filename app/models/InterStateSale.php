<?php

class InterStateSale extends \Eloquent {

    protected $guarded = [];

    protected $table = 'InterStateSales';


    public function user()
    {
        return $this->belongsTo('User');
    }
}