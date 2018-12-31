<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    protected $table = 'gerenteProducto';

    public function user()
	{
	    return $this->belongsTo(User::class, 'idUsuario');
	}

	public function producto()
	{
	    return $this->belongsTo(Producto::class, 'idProducto');
	}
}
