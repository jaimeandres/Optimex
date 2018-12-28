<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\User;
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

	public function create()
	{
		
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
		$usuarios = User::where('id',$id)->get()[0];
		return view('usuario.edit')->with('usuarios',$usuarios);
	}

	public function updates($id)
	{
		$usuario = User::where('id', $id)->get()[0];

		$this->validate(request(), [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'string|min:6|confirmed',
            'rol' => 'required'
        ]);

        
        $usuario->name = request(Input::get('name'));
        $usuario->email = request(Input::get('email'));
        $contraseña = Input::get('password');
        var_dump($contraseña);
        exit();
		if ($contraseña != NULL) {$usuario->password = bcrypt(request($contraseña));}
        //$usuario->password = bcrypt(request(Input::get('password')));

        $usuario->rol = request(Input::get('rol'));
		$url = "usuarios";
		
		if($usuario->save()){
			return redirect($url)->with('mensaje', 'Actualizacion exitosa');
		}else{
			return redirect($url)->with('warning', 'No se ha actualizado');
		}
	}

	public function eliminar($id)
	{
		$usuario = User::where('id',$id)->get()[0];
		$url = "/usuarios";
		if($usuario->delete()){
			return redirect($url)->with('mensaje', 'Se ha eliminado el producto');
		}else{
			return redirect($url)->with('warning', 'No se ha podido eliminar el producto');
		}
	}
}
