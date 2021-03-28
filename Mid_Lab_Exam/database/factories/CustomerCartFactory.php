<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustomerCart;
use Faker\Generator as Faker;

$factory->define(CustomerCart::class, function (Faker $faker) {
    $username = App\User::pluck('username')->toArray();

    return [

        'username' => $faker->randomElement($username),
        'quantity' => $faker->numberBetween(0,5),
    ];

});
