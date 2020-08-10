<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    protected $table = 'publicaciones';
    protected $fillable = ['id', 'titulo', 'comentario', 'eliminado', 'user_id', 'categoria_id'];

    public function categoria(){
        return $this->hasMany(Categorias::class, 'id');
    }

    public function comentario(){
        return $this->hasMany(Comentarios::class, 'publicacion_id');
    }
}
