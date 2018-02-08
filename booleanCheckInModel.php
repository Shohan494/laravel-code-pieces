<?php

const AVAILABLE_PRODUCT = 'available';
const UNAVAILABLE_PRODUCT = 'unavailable';

protected $fillable = [
	'seller_id',
];

public function isAvailable()
{
	return $this->status == Product::AVAILABLE_PRODUCT;
}