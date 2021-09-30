<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Graduate;
use Faker\Generator as Faker;

$factory->define(Graduate::class, function (Faker $faker) {
    return [
        'full_name' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'address' => $this->faker->address(),
        'phoneno' => $this->faker->tollFreePhoneNumber(),
        'userHash' => $this->faker->uuid()
    ];
});