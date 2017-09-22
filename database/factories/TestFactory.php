<?php

use Faker\Generator as Faker;
use App\Test;

$factory->define(Test::class, function (Faker $faker) {
    return [
        //
        'col1' => $faker->numberBetween(1, 10000),
        'col2' => $faker->numberBetween(1, 100)
    ];
});
