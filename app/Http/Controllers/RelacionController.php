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
		$usuarios = DB::table('users')->where('rol', '=', '1')->orderBy('name', 'asc')->get();
		return view('relacion.index')->with('usuarios',$usuarios);
	}

	public function create()
	{
		$usuarios = DB::table('users')->where('rol', '=', '1')->orderBy('name', 'asc')->get();
		$productos = DB::table('producto')->where('estado', '=', '0')->orderBy('nombre', 'asc')->get();
		$datos = array(
			'usuarios' => $usuarios,
			'productos' => $productos
		);
		return view('relacion.create')->with('datos',$datos);
	}

	public function store_relacion()
	{
		$idProducto = Input::get('productoSelec');
		$url = "/relacion";
		
		if ($idProducto == NULL) {
			return redirect($url)->with('warning', 'No existe producto a relacionar');
		}
		$relacion = new Relacion();
		$relacion->idUsuario = Input::get('usuarioSelec');
		$relacion->idProducto = Input::get('productoSelec');
		$estrategia = new Estrategia();
		$estrategia->idProducto = Input::get('productoSelec');
		$producto =DB::table('estrategia')->select('idProducto')->where('idProducto', '=', $idProducto)->get();
		$update = DB::table('producto')->where('id', $idProducto)->update(['estado' => Input::get('estado')]);
		
		if($update){
			if (!$producto->isEmpty()) {
				if($relacion->save()){
					return redirect($url)->with('mensaje', 'Asociación exitosa');
				}
			}
			if($relacion->save() && $estrategia->save()){
				return redirect($url)->with('mensaje', 'Asociación exitosa');
			}else{
				return redirect($url)->with('warning', 'Asociación fallida');
			}
		}else{
			return redirect($url)->with('warning', 'Asociación fallida');
		}
	}

	public function mostrar($id)
	{
		/*SELECT gp.idUsuario, gp.idProducto, p.id, p.nombre FROM gerenteproducto as gp, producto as p WHERE gp.idProducto=p.id and gp.idUsuario=2;*/

		$productos =DB::table('gerenteproducto')->join('producto', 'gerenteproducto.idProducto', '=', 'producto.id')->select('producto.id','producto.nombre')->where('gerenteproducto.idUsuario', '=', $id)->orderBy('producto.nombre', 'asc')->get();
		$usuarios = DB::table('users')->select('id','name')->where('id', '=', $id)->get();
		$datos = array(
			'usuarios' => $usuarios,
			'productos' => $productos
		);
		return view('relacion.consultar')->with('datos',$datos);
	}

	public function quitar($id)
	{
		$relacion = Relacion::where('idProducto',$id)->get()[0];
		$update = DB::table('producto')->where('id', $id)->update(['estado' => 0]);
		$url = "/relacion";
		if($update){
			if($relacion->delete()){
				return redirect($url)->with('mensaje', 'Se ha quitado el producto');
			}else{
				return redirect($url)->with('warning', 'No se ha podido quitar el producto');
			}
		}else{
			return redirect($url)->with('warning', 'No se ha podido quitar el producto');
		}
	}
}
