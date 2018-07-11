<?php

use Faker\Generator as Faker;
use App\Entity\Money;
use App\Entity\Currency;
use App\Entity\Wallet;

$factory->define(Money::class, function (Faker $faker) {

    return [

        'currency_id' => Currency::all()->random()->id,
        'amount' => $faker->randomFloat(2, 0, 1000),
        'wallet_id' => Wallet::all()->random()->id

    ];

});