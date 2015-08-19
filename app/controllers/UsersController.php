<?php 

use TodoPartes\Entities\User;
use TodoPartes\Managers\RegisterManager;
use TodoPartes\Repositories\UserRepo;

class UsersController extends BaseController {
	
	protected $userRepo;

	public function __construct(UserRepo $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	public function signUp()
	{
		return View::make('users/sign-up');
	}

	public function register()
	{
		$user = $this->userRepo->newUser();
		
		$manager = new RegisterManager($user, Input::all());

		if ($manager->save())
		{
			return Redirect::route('home');
		}

		return Redirect::back()->withInput()->withErrors($manager->getErrors());
	}

}