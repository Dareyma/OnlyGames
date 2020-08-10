<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table = 'comentarios';
    protected $fillable = ['id', 'titulo', 'comentario', 'eliminado', 'publicacion_id'];

    public function publicacion(){
        return $this->hasOne(Publicaciones::class, 'id');
    }
}