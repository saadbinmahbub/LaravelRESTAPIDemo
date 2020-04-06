<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(3, 5)),
        'description' => $faker->sentence(10, 15)
    ];
});
