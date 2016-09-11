<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1, 8),
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1, 9),
        'post_id' => mt_rand(1, 100),
        'comment' => $faker->paragraph,
    ];
});
