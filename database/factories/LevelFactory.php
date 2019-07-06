<?php

use Faker\Generator as Faker;

$factory->define(App\level::class, function (Faker $faker) {
    return [
    	'name'=>$faker->word,
    	'description' =>$faker->sentence
    ];
});
