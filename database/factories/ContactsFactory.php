<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Contact::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'email'     => $faker->email,
        'phone'     => $faker->phoneNumber,
        'message'   => $faker->sentence
    ];
});
