<?php

//Any Model without Seller

protected $fillable = [
	'seller_id',
];

public function seller()
{
    return $this->belongsTo(Seller::class);
}