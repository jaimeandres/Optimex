<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    public function index()
    {
    	return view('auth/login');
    }

    function checklogin(Request $request)
    {
    	$this->validate($request, [
    		'email'   => 'required|email',
			'password'  => 'required|min:6'
		]);

		$user_data = array(
			'email'  => $request->get('email'),
			'password' => $request->get('password')
		);

		if(Auth::attempt($user_data))
		{
			return redirect('inicio/successlogin');
		}
		else
		{
			return back()->with('error', 'Wrong Login Details');
		}

    }

    function successlogin()
    {
     	return view('successlogin');
    }

    function logout()
    {
     	Auth::logout();
     	return redirect('inicio');
    }
}
