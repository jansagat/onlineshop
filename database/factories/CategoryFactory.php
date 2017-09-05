<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'content' => $faker->text(200),
    ];
});
