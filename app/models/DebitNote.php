<?php

class DebitNote extends \Eloquent {

	protected $guarded = [];

    protected $table = 'DebitNotes';

    public function user()
    {
        return $this->belongsTo('User');
    }
}