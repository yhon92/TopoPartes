<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use TodoPartes\Entities\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'id' => 1,
			'username' => 'admin',
			'full_name' => 'Administrador del Site',
			'email' => 'admin@admin.admin',
			'password' => \Hash::make('123'),
			'type' => 'admin'
			]);
	}

}