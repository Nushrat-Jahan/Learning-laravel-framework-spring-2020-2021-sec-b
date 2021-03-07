<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $price = $faker->numberBetween(1,100);
    $quantity = $faker->numberBetween(1,20);

    return [
        'vendor_id' => $faker->numberBetween(1,10),
        'product_name' => $faker->randomElement(['Rosgolla', 'Sugar', 'Algorithm', 'Lipstick', 'Dairy MIlk', 'Straberry milkshake', 'Kinderjoy','Rohosso potrika']),
        'category' => $faker->randomElement(['Sweet', 'Grocery','Book', 'Makeup','Chocolate','Juice']),
        'unit_price' => $price,
        'quantity' => $quantity,
        'status' => $faker->randomElement(['existing', 'upcoming']),
        'date_added' => $faker->dateTimeBetween('-15 days','now', 'Asia/Dhaka'),

    ];

});
