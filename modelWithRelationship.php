<?php

//Any Model without Seller
//
// just focus in belongsTo, not any other type of relationship

protected $fillable = [
	'seller_id',
];

public function seller()
{
    return $this->belongsTo(Seller::class);
}