<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\InformasiUser;
use Faker\Generator as Faker;

$factory->define(InformasiUser::class, function (Faker $faker) {
    return [
        "jenis_kelamin" => "l",
        "keterangan"    => $faker->sentences(3, true),
        "facebook" => "/username",
    ];
});
