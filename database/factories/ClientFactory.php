<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'user_id' =>1,
        'name' => $faker->name(),
        'firstname' => $faker->firstname(),
        'lastname' => $faker->lastname(),
        'email' => $faker->email()
    ];
});

