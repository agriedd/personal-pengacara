<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HalamanHistory;
use Faker\Generator as Faker;

$factory->define(HalamanHistory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentences(1, true),
        'body'  => $faker->randomHtml(),
    ];
});
