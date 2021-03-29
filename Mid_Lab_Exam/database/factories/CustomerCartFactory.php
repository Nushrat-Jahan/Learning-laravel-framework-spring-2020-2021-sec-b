<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustomerCart;
use Faker\Generator as Faker;

$factory->define(CustomerCart::class, function (Faker $faker) {

    $user_id = App\User::pluck('user_id')->toArray();
    $medicine_id = App\Medicine::pluck('medicine_id')->toArray();
    $quantity = $faker->numberBetween(0,5);

    return [

        'user_id' => $faker->randomElement($user_id),
        'medicine_id' => $faker->randomElement($medicine_id),
        'quantity' => $faker->randomElement($quantity),
        'total'=>0,

    ];

});
