<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Galeri;
use Faker\Generator as Faker;

$factory->define(Galeri::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence(4),
    ];
});
