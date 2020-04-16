<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Benifit::class, function (Faker $faker) {
	return [
		'name' => $faker->word,
		'slug' => function (array $benifit){
			return Str::slug($benifit['name']);
		},
		'rider_id' => App\Models\Rider::all()->random()->id,
		'detail' => $faker->text
	];
});
