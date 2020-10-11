<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Like;
use Faker\Generator as Faker;
use App\User;

$factory->define(Like::class, function (Faker $faker) {
    return [
        // 'reply_id' =>  function(){
        //     return Reply::all()->random();
        // },
        'user_id' =>  function(){
            return User::all()->random();
        },
    ];
});
