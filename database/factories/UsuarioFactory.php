<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Usuario;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        //
            //
        'usuario' => $faker->word,
        'password' => $faker->word,
        'nombre' => $faker->name
    ];
});
