<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Profile::class, function (Faker $faker) {
    return [

        'fname' => $faker ->firstName,
        'lname' => $faker ->lastName,
        'body' => $faker -> paragraph($nbSentence = 3, $variableNmSentences = true),

    ];
});
