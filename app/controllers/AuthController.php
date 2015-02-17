<?php 

use TodoPartes\Entities\User;
use TodoPartes\Repositories\UserRepo;

class AuthController extends BaseController {
	
	public function iniciar()
	{
		return View::make('users/login');
	}
	
	public function login()
	{
		$data = Input::all();

		$credentials = ['username' => $data['username'], 'password' => $data['password']];

		if (Auth::attempt($credentials))
		{
			return Redirect::route('home');
		}

		return Redirect::back()->with('login_error', 1);
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::route('home');
	}
}