<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\PlanRider::class, function (Faker $faker) {
    return [
        'plan_id' => App\Models\Plan::all()->random()->id,
        'rider_id' => App\Models\Rider::all()->random()->id
    ];
});
