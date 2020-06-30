<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
        'name' => "ivan",
        // 'email' => $faker->unique()->safeEmail,
        'email' => "ivanatista@gmail.com",
        'email_verified_at' => now(),
        'password' => '$2y$10$BxLD7h0EsPlCNToi4D0q.OnjDnQVAZ3wBoYS5jPbsfj8oH64eX15y', // password
        'role' => 'admin',
        'remember_token' => Str::random(10),
    ];
});
