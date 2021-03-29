<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [

        'user_id' => 'U'.$faker->numberBetween(1000,4000),
        'username' => $faker->unique()->firstName,
        'name' => $faker->name,
        'password' => $faker->numberBetween(1234,5000),
        'email' => $faker->unique()->safeEmail,
        'country' => $faker->country,
        'city' => $faker->city,
        'address' => $faker->countryCode,
        'companyname' => $faker->name,
        'user_type'=> $faker->randomElement(['Admin', 'Customer']),

    ];
});
