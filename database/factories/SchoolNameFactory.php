<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SchoolName;
use Faker\Generator as Faker;

$factory->define(SchoolName::class, function (Faker $faker) {
    return [
        'id' => $this->faker->uuid(),
        'school_name' => $this->faker->company()
    ];
});
