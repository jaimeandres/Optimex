<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

use App\User;
use Auth;
use DB;
use Input;

class WelcomeController extends Controller
{
    public function index()
    {
    	/*$correo = DB::table('users')->select('email')->where('id', '=', '1')->get();
        
        $password = Hash::make('12345678');
        print($password);
        $update = DB::table('users')->where('id', '1')->update(['password' => $password]);*/

        return view('welcome');
    }
}
