<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coments;
use Faker\Generator as Faker;

$factory->define(Coments::class, function (Faker $faker) {
    return [
        'collection_id' => Collection::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'content' => $faker->text
    ];
});
