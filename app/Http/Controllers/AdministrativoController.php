<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Producto;
use Validator;
use Response;
use Session;
use Excel;
use File;


class AdministrativoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		return view('inventario.cargar');
	}

	public function create()
	{
		//
	}


	public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
        
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
  
                    foreach ($data as $key => $value) {
                        var_dump($value);
       exit();
        				for ($i=0; $i < count($value) ; $i++) { 
        					$insert[] = [
	                        'stock' => $value[$i]->stock,
	                        //'fechaCaducidad' => $value->fechaCaducidad,
	                        ];
        				}
                        var_dump($insert);
        exit();
                    }
 
                    if(!empty($insert)){
 
                        $insertData = DB::table('producto')->update($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

	public function store(Request $request)
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
