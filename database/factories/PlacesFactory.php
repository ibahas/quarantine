<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\places;
use Faker\Generator as Faker;

$factory->define(places::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'date' => $faker->date,
        'user' => Rand(1, 10),
        'sick' => Rand(1, 10)
    ];
});
