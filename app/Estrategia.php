<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estrategia extends Model
{
    protected $table = 'estrategia';

    public function producto()
	{
	    return $this->belongsTo(Producto::class, 'idProducto');
	}
}
