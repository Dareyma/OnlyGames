<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentarios;
use Faker\Generator as Faker;

$factory->define(Comentarios::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'comentario' => $faker->sentence,
        'eliminado' => false,

        // Foráneas

        'user_id' => App\User::All()->random()->id,
        'publicacion_id' => App\Publicacion::All()->random()->id,
    ];
});
