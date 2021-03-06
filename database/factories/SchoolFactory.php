<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'school_code' => $faker->unique()->randomNumber(),
        'school_name' => $faker->sentence(),
    ];
});
