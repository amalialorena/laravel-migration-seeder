<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
    'title'=>$faker -> words(2, true),
    'views'=>$faker->randomNumber(3),
    'sells'=>$faker->randomNumber(3),
    'release_date'=> $faker->dateTime(),
    'cover'=> $faker->imageUrl(640, 480, 'animals', true),
    'label'=>$faker->word(),
];
});
