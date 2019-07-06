<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['PNL','LIDERAZGO','REUNIONES EXITOSAS']),
        'description'=>$faker->sentence

    ];
});
