<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'text' => $faker->text(300),
        'user_id' => \App\User::all()->first(),
    ];
});
