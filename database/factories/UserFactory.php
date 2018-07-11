<?php

use Faker\Generator as Faker;
use App\Entity\User;

$factory->define(User::class, function (Faker $faker) {

    return [

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail

    ];
    
});
