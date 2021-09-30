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
        'graduate_degrees_id' => factory(App\GraduateDegree::class),
        // 'Associate_degree' => $this->faker->sentence($nb = 4, $variableNbWords = true),
        // 'Associate_school' => $this->faker->company(),
        // 'UG_degree' => $this->faker->sentence($nb = 4, $variableNbWords = true),
        // 'UG_school' => $this->faker->company(),
        // 'PG_degree' => $this->faker->sentence($nb = 4, $variableNbWords = true),
        // 'PG_school' => $this->faker->company(),
        'userHash' => $this->faker->uuid()
    ];
});