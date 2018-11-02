<?php

use Faker\Generator as Faker;


$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement(['Ford','Honda','Toyota']),
        'Model' => $faker->randomElement(['Sedan','SUV','MiniVan']),
        'Year' => now(),
    ];
});