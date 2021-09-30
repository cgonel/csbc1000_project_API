<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GraduateDegree;
use Faker\Generator as Faker;

$factory->define(GraduateDegree::class, function (Faker $faker) {
    return [
        'id' => $this->faker->uuid(),
        'degree_name_id' => factory(App\DegreeName::Class),
        'school_name_id' => factory(App\SchoolName::Class),
        'year_issued' => $this->faker->year($max = date("Y"))
    ];
});
