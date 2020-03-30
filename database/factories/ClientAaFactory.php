<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\ClientAa::class, function (Faker $faker) {
	return [
		'client_id' => $faker->unique()->numberBetween(1, 30),
		'english_spoken' => $faker->numberBetween(0, 1),
		'english_written' => $faker->numberBetween(0, 1),
		'education_level' => $faker->numberBetween(0, 4)
	];
});
