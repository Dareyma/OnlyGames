<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id', 'nombre', 'eliminado'];

    public function user(){
        return $this->hasMany(User::class, 'rol_id');
    }
}
