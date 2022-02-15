<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postcard;
use Faker\Generator as Faker;

$factory->define(Postcard::class, function (Faker $faker) {
    return [
        'sender' => $faker -> words(1, true),
        'text' => $faker -> text(),
        'address' => $faker -> words(3, true),
        'img' => null,
    ];
});
