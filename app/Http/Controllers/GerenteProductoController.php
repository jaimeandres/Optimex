<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		//
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
