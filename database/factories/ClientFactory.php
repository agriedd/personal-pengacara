<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nama'  => $faker->name,
        "keterangan" => $faker->sentences(3, true),
    ];
});
