<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leader;
use Faker\Generator as Faker;

$factory->define(Leader::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> firstName(),
        'surname' => $faker -> lastName(),
        'assumption_date' => $faker -> date(),
        'wage' => $faker -> numberBetween(300000, 400000),
        'bonus' => $faker -> numberBetween(00000, 150000)
    ];
});
