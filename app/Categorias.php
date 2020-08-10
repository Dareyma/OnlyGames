<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['id', 'nombre'];
    // Papaya

    public function publicacion(){
        return $this->hasMany(Publicaciones::class, 'categoria_id');
    }
}