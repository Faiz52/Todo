<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'list' => $faker->sentence(5),
        'description' => $faker->paragraph(20),
        'completed' => false,
    ];
});
