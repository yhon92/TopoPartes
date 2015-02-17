<?php 

namespace TodoPartes\Repositories;

use TodoPartes\Entities\User;

class UserRepo {
	
	public function newUser()
	{
		$user = new User();
		$user->type = 'guest';
		return $user;
	}
	
}