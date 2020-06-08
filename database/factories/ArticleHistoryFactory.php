<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleHistory;
use Faker\Generator as Faker;

$factory->define(ArticleHistory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentences(1, true),
        'body'  => $faker->paragraphs(4, true),
    ];
});
