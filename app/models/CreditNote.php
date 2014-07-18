<?php

class CreditNote extends \Eloquent {

	protected $guarded = [];

    protected $table = 'creditNotes';

    public function user()
    {
        return $this->belongsTo('User');
    }
}