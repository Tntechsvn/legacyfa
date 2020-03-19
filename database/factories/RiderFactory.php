<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Rider::class, function (Faker $faker) {
	return [
		'name' => $faker->text,
		'slug' => function (array $rider){
			return Str::slug($rider['name']);
		},
		'feature' => $faker->text()
	];
});
