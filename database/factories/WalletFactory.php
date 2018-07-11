<?php

use Faker\Generator as Faker;
use App\Entity\Wallet;
use App\Entity\User;

$factory->define(Wallet::class, function (Faker $faker) {

    return [

        'user_id' => User::all()->random()->id

    ];

});
