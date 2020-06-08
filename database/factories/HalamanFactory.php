<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Halaman;
use Faker\Generator as Faker;

$factory->define(Halaman::class, function (Faker $faker) {
    return [
        'slug'  => $faker->userName,
        'status'    => 1,
    ];
});
