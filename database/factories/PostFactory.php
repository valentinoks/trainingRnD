<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker ->cityPrefix,
        'description'=> $faker ->sentence,
        'author'=> $faker ->firstNameMale
    ];
});
