<?php

use Faker\Generator as Faker;

$factory->define(App\IoPlaylist::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true)
    ];
});
