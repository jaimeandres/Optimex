<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Request;
use Response;

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
        $path = url('/uploads/');
        $files = $request->file('file');
        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
        }


        $filename = $product->name.'.'.$file->getClientOriginalExtension();
		$path = "/images/products/";
		$file->move(public_path().$path, $filename);
		$product->url_img = $path.$filename;
	}
}
