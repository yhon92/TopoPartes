<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use TodoPartes\Entities\Item;

class ItemTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 200) as $index)
		{
			Item::create([
				'name' 				=> $faker->name,
				'price' 			=> $faker->randomFloat($nbMaxDecimals = 2, $min = 150, $max = 50000),
				'description' => $faker->text(200),
				'status' 			=> $faker->randomElement(['Disponible', 'Agotado']),
				'existence'		=> $faker->randomNumber($nbDigits = 3),
				'img'					=> $faker->imageUrl('800', '600', 'transport')
			]);
		}
	}

}