<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Plan::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => function (array $plan){
        	return Str::slug($plan['name']);
        },
        'company_id' => App\Models\Company::all()->random()->id,
        'category_plan_id' => App\Models\CategoryPlan::all()->random()->id,
        'featured' => $faker->text(200)
    ];
});
