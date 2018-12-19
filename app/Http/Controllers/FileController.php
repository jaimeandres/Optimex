<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
	    return view('inventario.form');
	}

    public function store(Request $request)
	{
        $path = public_path().'/uploads/';
        $files = $request->file('file');
        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
        }
	}
}
