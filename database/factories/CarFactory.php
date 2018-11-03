<?php
use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array=array('Ford','Honda','Toyota')),
        'model' => $faker->firstNameFemale,
        'year' => $faker->year,
    ];
});