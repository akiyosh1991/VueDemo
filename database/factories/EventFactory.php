<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Event;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->randomDigit(),
        'user_id' => 1,
        'name' => $faker->name(),
        'date' => $faker->dateTimeBetween('-1 years', '1 years')->format('Y-m-d'),
    ];
});
