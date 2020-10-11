<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Reply;
use Faker\Generator as Faker;
use App\User;
use App\Model\Question;

$factory->define(Reply::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'question_id' => function(){
            return Question::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
