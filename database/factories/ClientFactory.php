<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Client::class, function (Faker $faker) {
	return [
		'title' => $faker->randomElement(['Mr', 'Mrs', 'Ms', 'Dr', 'Mdm']),
		'name' => $faker->name,
		'gender' => $faker->numberBetween(0, 1),
		'nric_passport' => $faker->swiftBicNumber,
		'nationality' => $faker->randomElement(['australian', 'canadian', 'hungarian', 'vietnamese', 'singaporean', 'qatari', 'indian']),
		'dob' => $faker->date('Y-m-d'),
		'marital_status' => $faker->randomElement(['S', 'M', 'W', 'D']),
		'smoker' => $faker->numberBetween(0, 1),
		'employment_status' => $faker->randomElement(['FT', 'PT', 'SE', 'UN', 'RT', 'Ot']),
		'occupation' => $faker->word,
		'company' => $faker->word,
		'business_nature' => $faker->word,
		'income_range' => $faker->randomElement([0, 30, 50, 100, 150, 300]),
		'contact_home' => $faker->phoneNumber,
		'contact_mobile' => $faker->phoneNumber,
		'contact_office' => $faker->phoneNumber,
		'contact_fax' => $faker->phoneNumber,
		'email' => $faker->email,
		'residential_address' => $faker->address,
		'mailing_address' => $faker->email,
		'pfr_id' => function () {
			return factory('App\Models\Pfr')->create()->id;
		},
	];
});
