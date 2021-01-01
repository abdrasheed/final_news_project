<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\news::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->numberBetween(1,4),
        'content'=>$faker->text(700),
        'title'=>$faker->text(30),
        'views'=>$faker->numberBetween(0,500),
        'latest'=>$faker->boolean,
        'most_recent'=>$faker->boolean,
        'most_read'=>$faker->boolean,
        'popular'=>$faker->boolean,
        'featured'=>$faker->boolean,
    ];
});
