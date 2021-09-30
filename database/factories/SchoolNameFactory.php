<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SchoolName;
use Faker\Generator as Faker;

$factory->define(SchoolName::class, function (Faker $faker) {
    return [
        'school_name' => $this->faker->company()
    ];
});
