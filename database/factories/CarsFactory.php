<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand'=> $faker->sentence(1),
        'model' => $faker->sentence(1),
        'year' => $faker->year(),
        'maxSpeed' => $faker->numberBetween(200, 300),
        'isAutomatic' => $faker->boolean(),
        'engine' => $faker->sentence(1),
        'numberOfDoors' =>$faker->numberBetween(3, 5),
    ];
});
