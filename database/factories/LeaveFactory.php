<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\leave;
use Faker\Generator as Faker;

$factory->define(leave::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'city' => $faker->city,
        'address' => $faker->address,
        'status' => Rand(0, 1),
        'homeid' => Rand(500, 900),
        'user' => Rand(1, 10)
    ];
});
