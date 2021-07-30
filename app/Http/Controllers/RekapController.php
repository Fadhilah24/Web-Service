<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class RekapController extends Controller

{
	public function __construct()
    {
        //$this->middleware("admin");
		$this->middleware("login");
    }
    public function ph(Request $request, $id)
    {
		$tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	$avgph = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->avg('ph');
		$minph = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->min('ph');
		$maxph = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->max('ph');
		return view('ph',['avgph' => $avgph,'minph'=>$minph,'maxph'=>$maxph, 'role' => $role1, 'idkolam'=>$id]);
 
    }
	 public function oksigen(Request $request, $id)
    {
		$tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	$avgdo = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->avg('oksigen');
		$mindo = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->min('oksigen');
		$maxdo = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->max('oksigen');
		return view('oksigen',['avgdo' => $avgdo,'mindo'=>$mindo,'maxdo'=>$maxdo, 'role' => $role1, 'idkolam'=>$id]);
    }
	 public function suhu(Request $request, $id)
    {
		$tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	$avgsuhu = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->avg('suhu');
		$minsuhu = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->min('suhu');
		$maxsuhu = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->max('suhu');
		return view('suhu',['avgsuhu' => $avgsuhu,
			'minsuhu'=>$minsuhu,'maxsuhu'=>$maxsuhu, 'role' => $role1, 'idkolam'=>$id]);
    }
}