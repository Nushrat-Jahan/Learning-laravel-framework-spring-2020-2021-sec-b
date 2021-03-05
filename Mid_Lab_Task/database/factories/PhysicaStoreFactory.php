<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PhysicalStore;
use Faker\Generator as Faker;

$factory->define(PhysicalStore::class, function (Faker $faker) {
    $price = $faker->numberBetween(1,100);
    $quantity = $faker->numberBetween(1,1000);

    return [
        'customerName' => $faker->name,
        'address' => $faker->address,
        'phone' => substr($faker->e164PhoneNumber,1,11),
        'productId' => 'P'.$faker->numberBetween(1000,5000),
        'productName' => $faker->name,
        'unitPrice' => $price,
        'quantity' => $quantity,
        'total' => $price*$quantity,
        'sold_date' => $faker->dateTimeBetween('-15 days','now', 'Asia/Dhaka'),
        'payType' => $faker->randomElement(['card', 'online', 'cash']),
        'status' => $faker->randomElement(['sold', 'pending']),

    ];
});
