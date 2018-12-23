<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Producto;
use App\Estrategia;
use Auth;
use DB;
use Input;

class GerenteProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
	{
		$id= Auth::user()->id;
		$productos =DB::table('gerenteproducto')->join('producto', 'gerenteproducto.idProducto', '=', 'producto.id')->select('producto.nombre', 'producto.id')->where('gerenteproducto.idUsuario', '=', $id)->get();
		$usuarios = DB::table('users')->select('name')->where('id', '=', $id)->get();
		$datos = array(
			'usuarios' => $usuarios,
			'productos' => $productos
		);
		return view('estrategias.index')->with('datos',$datos);
	}

	public function create()
	{
		return view('usuario.create');
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
		$estrategias = DB::table('estrategia')->where('idProducto', '=', $id)->get();
		$datos = array(
			'estrategias' => $estrategias,
			'productos' => $id
		);
		return view('estrategias.edit')->with('datos',$datos);
	}

	public function editfija($id)
	{
		$estrategias = DB::table('estrategia')->where('idProducto', '=', $id)->get();
		$datos = array(
			'estrategias' => $estrategias,
			'productos' => $id
		);
		return view('estrategias.editfija')->with('datos',$datos);
	}

	public function calculo($id)
	{
		$cobertura = 0;
		$sobrante = 0;
		$total =DB::table('producto')->select('stock')->where('id', '=', $id)->get();
		$estrategia = DB::table('estrategia')->where('idProducto', '=', $id)->get();
		$caducidad =DB::table('producto')->select('producto.cobertura')->where('id', '=', $id)->get();
		$vida = $caducidad[0]->cobertura -3;
		$planeado = $estrategia[0]->enero+$estrategia[0]->febrero+$estrategia[0]->marzo+$estrategia[0]->abril+$estrategia[0]->mayo+$estrategia[0]->junio+$estrategia[0]->julio+$estrategia[0]->agosto+$estrategia[0]->septiembre+$estrategia[0]->octubre+$estrategia[0]->noviembre+$estrategia[0]->diciembre;
		$promedio =	round(($planeado/12), 0);
		$restante= $total[0]->stock - $planeado;
		$restante_temp = $restante;
		if ($vida > 12) {
			if ($restante_temp >= 0) {
				$i = 0;
				$vida = $vida -12;
				while ($restante_temp >= $promedio) {
					$restante_temp =  $restante_temp - $promedio;
					$i = $i + 1;
					if ($i >= $vida) {
						$restante_temp = 0;
					}
				}
				$cobertura = 12 + $i;
				$sobrante = round((($restante - ($promedio * $i)) / $total[0]->stock)*100, 0);
			}else{
				$cobertura = floor(($total[0]->stock / $promedio));
				$sobrante = round((($total[0]->stock - ($promedio * $cobertura)) / $total[0]->stock)*100, 0);
			}
		}else{
			$cobertura = $vida;
			$sobrante = round((($total[0]->stock - ($promedio * $vida)) / $total[0]->stock)*100, 0);
		}
		


		/*var_dump($sobrante);
		exit();*/
		$datos = array(
			'estrategias' => $estrategia,
			'productos' => $id,
			'cobertura' => $cobertura,
			'sobrante' => $sobrante
		);
		return view('estrategias.calculo')->with('datos',$datos);
	}

	public function update($id)
	{
		//
	}

	public function update_estrategia($id)
	{
		$url = "estrategia/".$id."/edit";
		if(Input::get('enero') < 0){return redirect($url);}
		if(Input::get('febrero') < 0){return redirect($url);}
		if(Input::get('marzo') < 0){return redirect($url);}
		if(Input::get('abril') < 0){return redirect($url);}
		if(Input::get('mayo') < 0){return redirect($url);}
		if(Input::get('junio') < 0){return redirect($url);}
		if(Input::get('julio') < 0){return redirect($url);}
		if(Input::get('agosto') < 0){return redirect($url);}
		if(Input::get('septiembre') < 0){return redirect($url);}
		if(Input::get('octubre') < 0){return redirect($url);}
		if(Input::get('noviembre') < 0){return redirect($url);}
		if(Input::get('diciembre') < 0){return redirect($url);}
		$estrategia = Estrategia::where('idProducto',$id)->get()[0];
		$estrategia->enero = Input::get('enero');
		$estrategia->febrero = Input::get('febrero');
		$estrategia->marzo = Input::get('marzo');
		$estrategia->abril = Input::get('abril');
		$estrategia->mayo = Input::get('mayo');
		$estrategia->junio = Input::get('junio');
		$estrategia->julio = Input::get('julio');
		$estrategia->agosto = Input::get('agosto');
		$estrategia->septiembre = Input::get('septiembre');
		$estrategia->octubre = Input::get('octubre');
		$estrategia->noviembre = Input::get('noviembre');
		$estrategia->diciembre = Input::get('diciembre');
		
		if($estrategia->save()){
			return redirect($url)->with('mensaje', 'Actualización exitosa');
		}else{
			return redirect($url)->with('warning', 'No se ha podido actualizar');
		}
	}

	public function update_fija($id)
	{
		$url = "estrategia";
		
		if(Input::get('fija') < 0){
			return redirect($url)->with('warning', 'Número invalido');
		}
		$estrategia = Estrategia::where('idProducto',$id)->get()[0];
		$estrategia->enero = Input::get('fija');
		$estrategia->febrero = Input::get('fija');
		$estrategia->marzo = Input::get('fija');
		$estrategia->abril = Input::get('fija');
		$estrategia->mayo = Input::get('fija');
		$estrategia->junio = Input::get('fija');
		$estrategia->julio = Input::get('fija');
		$estrategia->agosto = Input::get('fija');
		$estrategia->septiembre = Input::get('fija');
		$estrategia->octubre = Input::get('fija');
		$estrategia->noviembre = Input::get('fija');
		$estrategia->diciembre = Input::get('fija');
		if($estrategia->save()){
			return redirect($url)->with('mensaje', 'Actualización exitosa');
		}else{
			return redirect($url)->with('warning', 'No se ha podido actualizar');
		}
	}

	public function destroy($id)
	{
		//
	}

	//SELECT TIMESTAMPDIFF(MONTH, curdate(), '2019-05-05') funcion para saber meses de distribucion fecha final - inicial
}
