<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {

    return [

        'name' => $faker->name,
        'category'=> $faker->randomElement(['aspirine', 'paracitamol']),
        'medicine_type'=> $faker->randomElement(['solid', 'liquid']),
        'vendor_name' => $faker->name,
        'price' => $faker->numberBetween(20,100),
        'availability'=> $faker->randomElement(['available', 'not available']),

    ];
});