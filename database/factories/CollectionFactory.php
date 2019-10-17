<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Collection;
use Faker\Generator as Faker;

$factory->define(Collection::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
        'description' => Str::random(10),
        'user' => Theme::all()->random()->id,
    ];
});
