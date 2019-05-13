<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Position;
use Faker\Generator as Faker;

$factory->define(Position::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'salary' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
