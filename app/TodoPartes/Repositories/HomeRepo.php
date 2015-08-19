<?php 

namespace TodoPartes\Repositories;

use TodoPartes\Entities\Item;

class HomeRepo {
	
	public function all()
	{
		return Item::all();
	}

	public function paginate()
	{
		return Item::paginate(10);
	}
	
}