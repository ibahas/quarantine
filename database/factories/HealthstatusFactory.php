<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\healthstatus;
use Faker\Generator as Faker;

$factory->define(healthstatus::class, function (Faker $faker) {
    return [
        //
        'date' => $faker->date,
        'details' => $faker->paragraph,
        'sick' => Rand(1, 10),
        'status' => Rand(0, 1),
        'user' => Rand(1, 10)
    ];
});
