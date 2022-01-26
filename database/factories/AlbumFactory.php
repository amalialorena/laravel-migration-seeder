<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
    'title'=>$faker -> name(),
    'views'=>$faker->numberBetween(0, 1000000),
    'sells'=>$faker->numberBetween(0, 1000000),
    'release_date'=> $faker->dateTime(),
    'cover'=> $faker->imageUrl(640, 480, 'animals', true),
    'label'=>$faker->word(),
    ];
});
