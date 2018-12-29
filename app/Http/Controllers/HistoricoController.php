<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Producto;
use App\Estrategia;
use Auth;
use DB;
use Input;

class HistoricoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id= Auth::user()->id;
        if (Auth::user()->rol == 99) {
            $productos =DB::table('gerenteproducto')->join('producto', 'gerenteproducto.idProducto', '=', 'producto.id')->select('producto.nombre', 'producto.id')->get();
        }else{
            $productos =DB::table('gerenteproducto')->join('producto', 'gerenteproducto.idProducto', '=', 'producto.id')->select('producto.nombre', 'producto.id')->where('gerenteproducto.idUsuario', '=', $id)->orderBy('producto.nombre', 'asc')->get();
        }
        $año1 = DB::select('Select (YEAR(curdate()) - 2) as año1');
        $año2 = DB::select('Select (YEAR(curdate()) - 1) as año2');
        $datos = array(
            'productos' => $productos,
            'año1' => $año1,
            'año2' => $año2,
        );
        return view('historicos.index')->with('datos',$datos);
    }

    public function create()
    {
        $año = DB::select('Select YEAR(curdate()) as año');
        return view('historicos.create')->with('año',$año);
    }

    public function store()
    {
        /*$sql = 'Insert Into historicos Select * FROM estrategia;';
        DB::statement($sql);
        $url = "/historico";
        return redirect($url)->with('mensaje', 'Historico generado');*/
    }

    public function show($id)
    {
        //        
    }

    public function edit($id)
    {
        //
    }   

    public function update(Request $request, $id)
    {
        //
    }    

    public function destroy($id)
    {
        //
    }
}
