<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        
        'pay_id' => rand(1,3),
        'title' => $faker->sentence,
        'slug'  => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
