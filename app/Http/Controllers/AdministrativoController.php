<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Validator;
use Auth;
use DB;
use Input;


class AdministrativoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		$productos =DB::table('producto')->select('producto.nombre', 'producto.id')->orderBy('producto.nombre', 'asc')->get();
        $datos = array(
            'productos' => $productos
        );
        return view('inventario.index')->with('datos',$datos);
	}

	public function edit($id)
	{
		$productos = DB::table('producto')->where('id', '=', $id)->get()[0];
		return view('inventario.cargar')->with('productos',$productos);
	}

	public function updates($id)
	{
		$url = "inventario";
		if(Input::get('stock') < 0){return redirect($url)->with('warning', 'Número/s invalido');}
		$producto = Producto::where('id',$id)->get()[0];
		$producto->stock = Input::get('stock');
		$producto->fechaCaducidad = Input::get('caducidad');
		
		if($producto->save()){
			return redirect($url)->with('mensaje', 'Actualización exitosa');
		}else{
			return redirect($url)->with('warning', 'No se ha podido actualizar');
		}
	}

	public function total()
    {
        $total = DB::select('Select `idProducto`, (`enero`+ `febrero`+ `marzo`+ `abril`+ `mayo`+ `junio`+ `julio`+ `agosto`+ `septiembre`+ `octubre`+ `noviembre`+ `diciembre`) as total FROM `estrategia` ORDER BY `estrategia`.`idProducto` ASC');
        $productos =DB::table('gerenteproducto')->join('producto', 'gerenteproducto.idProducto', '=', 'producto.id')->select('producto.id', 'producto.nombre')->orderBy('producto.id', 'asc')->get();

        $datos = array(
            'productos' => $productos,
            'total' => $total
        );
        return view('consolidado.index')->with('datos',$datos);
    }

    public function detalle($id)
    {
        $estrategia =DB::table('estrategia')->where('idProducto', '=', $id)->get()[0];
        return view('consolidado.show')->with('estrategia',$estrategia);
    }
}
