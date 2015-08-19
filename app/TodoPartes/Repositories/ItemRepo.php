<?php 

namespace TodoPartes\Repositories;

use TodoPartes\Entities\Item;

class ItemRepo {
	
	public function all()
	{
		return Item::all();
	}

	public function paginate()
	{
		return Item::paginate(10);
	}
	public function like($name)
	{
		return Item::where('name', 'LIKE', '%'.$name.'%')->get();
	}
}