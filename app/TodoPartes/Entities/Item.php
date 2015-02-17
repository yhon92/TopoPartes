<?php 

namespace TodoPartes\Entities;

class Item extends \Eloquent {
	protected $fillable = [];

	public function getPriceAttribute($value)
	{
		return number_format ($value, 2, ',', '.');
	}
}