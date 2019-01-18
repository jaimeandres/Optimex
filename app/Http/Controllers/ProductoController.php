<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Producto;
use Auth;
use DB;
use Input;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		$productos = Producto::all();
		return view('producto.index')->with('productos',$productos);
	}

	public function create()
	{
		return view('producto.create');
	}

	public function store()
	{
		$url = "/productos";
		$producto = new Producto();		
		$producto->nombre = Input::get('nombre');
		if (Producto::where('nombre',$producto->nombre)->exists()) {
			return redirect($url)->with('warning', 'Ya existe el producto');
		}
		
		if($producto->save()){
			return redirect($url)->with('mensaje', 'Ingreso exitoso');
		}else{
			return redirect($url)->with('warning', 'Ingreso fallido');
		}
	}

	public function edit($id)
	{
		$productos = Producto::where('id',$id)->get()[0];
		return view('producto.edit')->with('productos',$productos);
	}

	public function updates($id)
	{
		$producto = Producto::where('id', $id)->get()[0];
		$producto->nombre = Input::get('nombre');
		$url = "productos";
		if($producto->save()){
			return redirect($url)->with('mensaje', 'Actualizacion exitosa');
		}else{
			return redirect($url)->with('warning', 'No se ha actualizado');
		}
	}

	public function eliminar($id)
	{
		$producto = Producto::where('id',$id)->get()[0];
		$url = "/productos";
		if($producto->delete()){
			return redirect($url)->with('mensaje', 'Se ha eliminado el producto');
		}else{
			return redirect($url)->with('warning', 'No se ha podido eliminar el producto');
		}
	}
}
