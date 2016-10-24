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

use SigAtelie\Cliente;
use SigAtelie\User;


$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Cliente::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
        'cpf' => $faker->unique()->randomDigit ,
        'datanascimento' => $faker->date('2016-04-21')
    ];
});
