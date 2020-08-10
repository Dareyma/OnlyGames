<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Roles::class)->create(['nombre'=> 'Owner']);
        factory(\App\Roles::class)->create(['nombre'=> 'Admin']);
        factory(\App\Roles::class)->create(['nombre'=> 'Mod']);
        factory(\App\Roles::class)->create(['nombre'=> 'Miembro']);

        factory(\App\User::class)->create(['name'=> 'OnlyGames','email'=>'onlygamesnetwork@gmail.com', 'password'=> bcrypt('PlayForFun365'), 'rol_id'=>1]);
        factory(\App\User::class)->create(['name'=> 'Dareyma', 'email'=>'Dareyma7@gmail.com', 'password'=> bcrypt('Demelsa1'), 'rol_id'=>2]);

        factory(\App\Categorias::class)->create(['nombre'=> 'Actualizaciones']);
        factory(\App\Categorias::class)->create(['nombre'=> 'Ciudades']);
        factory(\App\Categorias::class)->create(['nombre'=> 'Eventos']);
    }
}
