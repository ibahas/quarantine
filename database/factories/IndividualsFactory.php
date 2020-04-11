<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\individuals;
use Faker\Generator as Faker;

$factory->define(individuals::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'sick' => Rand(1,10),
        'user'=> Rand(1,10)
    ];
});
