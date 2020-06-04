<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'body'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'category_id'=> factory('App\Category')->create()->id,
        'user_id'=>factory('App\User')->create()->id
    ];
});
