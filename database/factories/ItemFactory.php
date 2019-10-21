<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;
use App\Collection;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(1),
        'description'=>$faker->text,
        'collection_id'=>Collection::all()->random()->id,

    ];
});
