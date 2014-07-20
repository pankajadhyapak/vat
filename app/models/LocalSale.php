<?php

class LocalSale extends \Eloquent {

	protected $guarded = [];

    protected $table = 'LocalSales';

    public function user()
    {
        return $this->belongsTo('User');
    }
}