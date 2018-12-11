<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Relacion;
use App\User;
use App\Producto;
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
		$productos = DB::table('producto')->where('estado', '=', '0')->get();
		return view('relacion.create')->with('productos',$productos);
	}

	public function store($id)
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
