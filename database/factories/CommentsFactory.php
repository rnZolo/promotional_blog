<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'comment' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'update_status' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
