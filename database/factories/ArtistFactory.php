<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'lastname' => $faker -> lastName(), 
        'stage_name'=> $faker -> userName(), 
        'birth_date'=>$faker ->date(),
        'awards'=> $faker -> catchPhrase(),
        'bio'=> $faker->text(),
    ];
});
