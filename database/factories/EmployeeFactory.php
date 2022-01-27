<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> firstName(),
        'surname' => $faker -> lastName(), 
        'assumption_date' => $faker -> date(),
        'cf' => $faker -> taxId(),
        'wage' => $faker -> numberBetween(100000, 300000),
        'role' => $faker -> word()
    ];
});
