<?php

use TodoPartes\Repositories\ItemRepo;

class HomeController extends BaseController {

	protected $itemRepo;

	public function __construct(ItemRepo $itemRepo)
	{
		$this->itemRepo = $itemRepo;
	}

	public function index()
	{
		// $items = $this->itemRepo->paginate();

		return View::make('home');
	}

}
