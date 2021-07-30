<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use App\Models\SensorKolam;
use App\Models\InfoIkan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class TampiljenisikanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("login");
    }
    
	 
	public function lists(Request $request, $id)
    {
        //$this->middleware("login");
		$tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	$avgdo = DB::table('datasensor')->where('idkolam',$id)->avg('oksigen');
    	$infoikan = DB::table('infoikan')->where('idkolam',$id)->get();
        return view('infoikan',['infoikan' => $infoikan,'role' => $role1]);
 
    }
    
     public function listsjson()
    {
        //$this->middleware("login");
		//$tokenlogin = $request->session()->get('Authorization');
		//$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	//$avgdo = DB::table('datasensor')->where('idkolam',$id)->avg('oksigen');
    	$infoikan = DB::table('infoikan')->get();
        return response()->json($infoikan);
 
    }
   
}