<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Relacion;
use App\User;
use App\Producto;
use App\Estrategia;
use Auth;
use DB;
use Input;

class RelacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		$usuarios = DB::table('users')->where('rol', '=', '1')->get();
		return view('relacion.index')->with('usuarios',$usuarios);
	}

	public function create()
	{
		$usuarios = DB::table('users')->where('rol', '=', '1')->get();
		$productos = DB::table('producto')->where('estado', '=', '0')->get();
		$datos = array(
			'usuarios' => $usuarios,
			'productos' => $productos
		);
		return view('relacion.create')->with('datos',$datos);
	}

	public function store_relacion()
	{
		$relacion = new Relacion();
		$relacion->idUsuario = Input::get('usuarioSelec');
		$relacion->idProducto = Input::get('productoSelec');
		$estrategia = new Estrategia();
		$estrategia->idProducto = Input::get('productoSelec');
		$idProducto = Input::get('productoSelec');
		$url = "/relacion/create";		
		$update = DB::table('producto')->where('id', $idProducto)->update(['estado' => Input::get('estado')]);
		if($update){
			if($relacion->save() && $estrategia->save()){
				return redirect($url)->with('mensaje', 'Ingreso exitoso');
			}else{
				return redirect($url)->with('warning', 'Ingreso fallido');
			}
		}else{
			return redirect($url)->with('warning', 'Ingreso fallido');
		}
	}

	public function mostrar($id)
	{
		/*SELECT gp.idUsuario, gp.idProducto, p.id, p.nombre FROM gerenteproducto as gp, producto as p WHERE gp.idProducto=p.id and gp.idUsuario=2;*/

		$productos =DB::table('gerenteproducto')->join('producto', 'gerenteproducto.idProducto', '=', 'producto.id')->select('producto.nombre')->where('gerenteproducto.idUsuario', '=', $id)->get();
		$usuarios = DB::table('users')->select('name')->where('id', '=', $id)->get();
		$datos = array(
			'usuarios' => $usuarios,
			'productos' => $productos
		);
		return view('relacion.consultar')->with('datos',$datos);
	}

	public function store()
	{
		//
		
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
