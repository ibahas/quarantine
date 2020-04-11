<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\medicalexaminations;
use Faker\Generator as Faker;

$factory->define(medicalexaminations::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'details' => $faker->paragraph,
        'sick' => Rand(1, 10),
        'user' => Rand(1, 10)
    ];
});
