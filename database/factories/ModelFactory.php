<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(SysProjectManagement\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(SysProjectManagement\Client::class, function (Faker\Generator $faker) {
    return [
        'cli_name'          => $faker->name,
        'cli_responsible'   => $faker->name,
        'cli_email'         => $faker->email,
        'cli_phone'         => $faker->phoneNumber,
        'cli_address'       => $faker->address,
        'cli_obs'           => $faker->sentence

    ];
});
