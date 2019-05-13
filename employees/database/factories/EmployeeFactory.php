<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'company_id' => function() {
            return App\Company::inRandomOrder()->first()->id;
        },
        'position_id' => function() {
            return App\Position::inRandomOrder()->first()->id;
        },
    ];
});
