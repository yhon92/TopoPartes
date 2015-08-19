<?php 

use TodoPartes\Repositories\ItemRepo;

class ItemsController extends BaseController {

	protected $itemRepo;

	public function __construct(ItemRepo $itemRepo)
	{
		$this->itemRepo = $itemRepo;
	}

	public function item()
	{
		if (Request::ajax()) {
			$items = $this->itemRepo->paginate();

			return View::make('items/items', compact('items'));
		}
	}

	public function itemsFilter($name)
	{
		if (Request::ajax()) {

			$items = $this->itemRepo->like(str_replace('_', ' ', $name));
		
			return View::make('items/items', compact('items'));
		}
	}
	public function itemsAll()
	{
		if (Request::ajax()) {
			$items = $this->itemRepo->all();
		
			return View::make('items/items', compact('items'));
		}
	}
}