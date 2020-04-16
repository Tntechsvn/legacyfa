<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\CategoryPlan::class, function (Faker $faker) {
	return [
		'name' => $faker->word,
		'slug' => function (array $categoryPlan){
			return Str::slug($categoryPlan['name']);
		}
	];
});
