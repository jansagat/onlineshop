<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->text(200),
        'price' => $faker->numberBetween(0, 516515),
        'old_price' => $faker->numberBetween(0, 516515),
        'currency' => $faker->currencyCode(),
        'available' => true,
        'original_url' => $faker->url(),
        'ali_id' => $faker->numberBetween(100000, 1000000),
    ];
});
