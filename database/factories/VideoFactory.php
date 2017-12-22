<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
  return [
    'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
    'video_id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
    'duration' => 'PT6M11S'
  ];
});
