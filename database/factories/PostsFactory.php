<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'author_id' => 1,
        'description' => $faker->paragraph,
        'active' => 1
    ];
});
