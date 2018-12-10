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
		$producto = new Producto();
		$producto->nombre = Input::get('nombre');
		$url = "/productos";
		if($producto->save()){
			return redirect($url)->with('mensaje', 'Ingreso exitoso');
		}else{
			return redirect($url)->with('warning', 'Ingreso fallido');
		}
	}

	public function show()
	{
		//
		
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}
}
