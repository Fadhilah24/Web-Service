<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class LogoutController extends Controller
{
	public function __construct()
    {
        //$this->middleware("admin");
		//$this->middleware("login");
    }
    public function logout(Request $request)
    {
    	$request->session()->forget('Authorization');
		$request->session()->forget('role1');
		$request->session()->forget('role2');
    	return redirect('loginpage');
 
    }
}