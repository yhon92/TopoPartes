<?php 

namespace TodoPartes\Managers;

class RegisterManager extends BaseManager {

	public function getRules()
	{
		$rules = [
			'username'  						=> 'required|unique:users',
			'full_name' 						=> 'required',
			'email'     						=> 'required|email|unique:users',
			'password'  						=> 'required|confirmed',
			'password_confirmation' => 'required'
		];

		return $rules;
	}


} 