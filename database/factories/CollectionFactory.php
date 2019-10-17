<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Collection;
use App\User;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Collection::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'description' => $faker->text,
        'user_id' => User::all()->random()->id,
        'category_id' => Category::all()->random()->id,
    ];
});
