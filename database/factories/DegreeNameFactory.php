<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DegreeName;
use Faker\Generator as Faker;

$factory->define(DegreeName::class, function (Faker $faker) {
    return [
        'id' => $this->faker->uuid(),
        'degree_name' => $this->faker->sentence($nb = 4, $variableNbWords = true)
    ];
});
