<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Votes::class, function (Faker $faker) {
    return [
        'votes' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),

    ];
});
