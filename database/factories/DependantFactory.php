<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Dependant::class, function (Faker $faker) {
	return [
		'pfr_id' => App\Models\Pfr::all()->random()->id,
		'title' => $faker->randomElement(['Mr', 'Mrs', 'Ms', 'Dr', 'Mdm']),
		'name' => $faker->name,
		'relationship' => $faker->text,
		'dob' => $faker->date('Y-m-d'),
		'age' => $faker->numberBetween(0, 70),
		'gender' => $faker->numberBetween(0, 1),
		'year_to_support' => $faker->numberBetween(2010, 2053)
	];
});
