<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Request;
use Response;

class AdministrativoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		return view('inventario.upload');
	}

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		$path = url('/uploads/');
            $files = $request->file('file');
            foreach($files as $file){
                $fileName = $file->getClientOriginalName();
                $file->move($path, $fileName);
            }
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
