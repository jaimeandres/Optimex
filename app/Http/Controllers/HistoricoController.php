<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Producto;
use App\Estrategia;
use App\Historicos;
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
        $año1 = DB::select('Select (YEAR(curdate()) - 3) as año1');
        $año2 = DB::select('Select (YEAR(curdate()) - 2) as año2');
        $datos = array(
            'productos' => $productos,
            'año1' => $año1,
            'año2' => $año2
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
        $sql = 'Insert Into historicos(idProducto, enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre) Select idProducto, enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre FROM estrategia';
        DB::statement($sql);
        $url = "/historico";
        return redirect($url)->with('mensaje', 'Historico generado');
    }

    public function mostrar($id)
    {
        $historicos = DB::select('Select h.*, p.nombre FROM historicos as h, producto as p WHERE h.idProducto=p.id AND h.idProducto=? AND (h.año=(YEAR(curdate()) - 3) OR h.año=(YEAR(curdate()) - 2))', [$id]);
        if (count($historicos) < 2) {
            $url = "/historico";
            return redirect($url)->with('warning', 'No existen historicos del producto');
        }
        return view('historicos.show')->with('historicos',$historicos);
    }
}

//SELECT `idProducto`, (`enero`+ `febrero`+ `marzo`+ `abril`+ `mayo`+ `junio`+ `julio`+ `agosto`+ `septiembre`+ `octubre`+ `noviembre`+ `diciembre`) as total FROM `estrategia` ORDER BY `estrategia`.`idProducto` ASC