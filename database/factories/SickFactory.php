<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\sick;
use Faker\Generator as Faker;

$factory->define(sick::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'bod' => $faker->date,
        'city' => $faker->city,
        'address' => $faker->address,
        'personalstatus' => Rand(0,1),
        'gender' => rand(1, 2),
        'user' => Rand(1, 10),
        'status' => Rand(0, 1),
    ];
});
