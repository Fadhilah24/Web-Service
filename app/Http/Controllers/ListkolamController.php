<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class ListkolamController extends Controller
{
	public function __construct()
    {
        //$this->middleware("admin");
		$this->middleware("login");
    }
    public function lists(Request $request)
    {
        if(request()->ajax()){
            
        }
    	
    	$registrasi_kolam = DB::table('registrasi_kolam')->get();
		$tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	
    	return view('lists',['registrasi_kolam' => $registrasi_kolam, 'role' => $role1]);
 
    }
    
    public function listsjson()
    {
        if(request()->ajax()){
            
        }
    	
    	$registrasi_kolam = DB::table('registrasi_kolam')->get();
    	
    	return response()->json($registrasi_kolam);
 
    }
}