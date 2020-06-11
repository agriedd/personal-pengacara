<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'nama'  => $faker->sentence(4),
        'location'  => $faker->address,
        'take_at'   => $faker->date(),
    ];
});
