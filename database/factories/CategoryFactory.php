<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->word;
    return [
        'name'=> $title,
        'slug' => str_slug($title),
    ];
});
