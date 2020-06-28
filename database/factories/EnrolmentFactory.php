<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enrolment;
use Faker\Generator as Faker;

$factory->define(Enrolment::class, function (Faker $faker) {
    $school_record_ids = DB::table('schools')->pluck('id')->all();
    return [
        'school_id' => $faker->randomElement($school_record_ids),
        'year' => $faker->year(),
        'no_of_students' => $faker->randomNumber(),
    ];
});
