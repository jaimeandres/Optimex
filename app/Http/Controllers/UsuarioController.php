<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Relacion;
use Auth;
use DB;
use Input;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		$usuarios = User::all();
		return view('usuario.index')->with('usuarios',$usuarios);
	}

	public function edit($id)
	{
		$usuarios = User::where('id',$id)->get()[0];
		return view('usuario.edit')->with('usuarios',$usuarios);
	}

	public function updates($id)
	{
		$usuario = User::where('id', $id)->get()[0];
		$usuario->name = Input::get('name');
        $usuario->email = Input::get('email');
        /*$contraseña = Input::get('password');
        if ($contraseña != NULL) {
        	$this->validate(request(), ['password' => 'string|min:6']);
        	$usuario->password = bcrypt(request($contraseña));
        }*/
        $usuario->rol = Input::get('rol');
		$url = "usuarios";
		
		if($usuario->update()){
			return redirect($url)->with('mensaje', 'Actualizacion exitosa');
		}else{
			return redirect($url)->with('warning', 'No se ha actualizado');
		}
	}

	public function eliminar($id)
	{
		$url = "/usuarios";
		$usuario = User::where('id',$id)->get()[0];
		$asociacion = DB::table('gerenteproducto')->where('idUsuario', '=', $id)->count();
		if($asociacion > 0){return redirect($url)->with('warning', 'No se puede eliminar el usuario porque tiene producto/s asociados, se deben quitar las asociaciones primero');}
		
		$url = "/usuarios";
		if($usuario->delete()){
			return redirect($url)->with('mensaje', 'Se ha eliminado el usuario');
		}else{
			return redirect($url)->with('warning', 'No se ha podido eliminar el usuario');
		}
	}
}
//SELECT count(*) FROM gerenteproducto WHERE idUsuario=9