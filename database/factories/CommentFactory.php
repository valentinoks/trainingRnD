<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'movie_id' => $faker->numberBetween(1,3),
        'user'=> $faker ->firstNameMale,
        'comment'=> $faker ->sentence
    ];
});
