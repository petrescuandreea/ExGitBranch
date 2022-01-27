<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> word(),
        'description' => $faker -> text(),
        'priority' => $faker -> numberBetween(0, 10),
        'start' => $faker -> date(),
        'deadline' => $faker -> date()
    ];
});
