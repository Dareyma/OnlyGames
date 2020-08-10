<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publicaciones;
use Faker\Generator as Faker;

$factory->define(Publicaciones::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'comentario' => $faker->sentence,
        // 'foto'
        'eliminado' => false,

        // Foráneas

        'user_id' => App\User::All()->random()->id,
        'categoria_id' => App\Categorias::All()->random()->id,
    ];
});
