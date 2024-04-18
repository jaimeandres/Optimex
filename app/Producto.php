<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    public function relacion()
    {
        return $this->hasMany(Relacion::class, 'idProducto');
    }

    public function estrategia()
    {
        return $this->hasMany(Estrategia::class, 'idProducto');
    }
}
