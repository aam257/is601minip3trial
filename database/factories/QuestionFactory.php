<?php

use Faker\Generator as Faker;

$factory->define(\App\Question::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph($nbSentence = 3, $variableNbSentences = true),
    ];
});
