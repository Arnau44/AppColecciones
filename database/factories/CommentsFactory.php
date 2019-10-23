<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\User;
use App\Collection;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'collection_id' => Collection::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'content' => $faker->text
    ];
});
