<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class ChartController extends Controller
{
	public function __construct()
    {
        //$this->middleware("admin");
		$this->middleware("login");
    }
    public function index(Request $request, $id)
    {   
        $registrasi_kolam = DB::table('registrasi_kolam')->where('id',$id)->value('nama_kolam');
        //dd($registrasi_kolam);
        $tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	// mengambil data dari table pegawai
    	$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
    	$datasensor2 = [];
		foreach ($datasensor as $datasen){ 
		$datasensor1 = json_decode($datasen->ph, true);
		$datasensor2[] = $datasensor1;
		}
		$date = DB::table('datasensor')->where('idkolam',$id)->get();
		//dd($date);
    	//$date2 = [];
		//foreach ($date as $dat){ 
		//$date1 = json_decode($dat->updated_at, true);
		//$date2[] = $date1;
		//}
		//dd($date2);
		//$datasensor1 =$datasensor->ph;
		//$datasensor = json_decode($datasensor, true);
		//dd($datasensor2);
    	return view('chart',['datasensor'=>$datasensor2, 'idkolam'=>$id, 'date'=>$date, 'role' => $role1, 'nama_kolam' => $registrasi_kolam ]);
 
    }
	public function showdo(Request $request, $id)
    {   
        $registrasi_kolam = DB::table('registrasi_kolam')->where('id',$id)->value('nama_kolam');
        $tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	// mengambil data dari table pegawai
    	$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
    	$datasensor2 = [];
		foreach ($datasensor as $datasen){ 
		$datasensor1 = json_decode($datasen->oksigen, true);
		$datasensor2[] = $datasensor1;
		}
		$date = DB::table('datasensor')->where('idkolam',$id)->get();
		//dd($date);
    	//$date2 = [];
		//foreach ($date as $dat){ 
		//$date1 = json_decode($dat->updated_at, true);
		//$date2[] = $date1;
		//}
		//$datasensor1 =$datasensor->ph;
		//$datasensor = json_decode($datasensor, true);
		//dd($datasensor2);
    	return view('chartdo',['datasensor'=>$datasensor2, 'idkolam'=>$id, 'date'=>$date, 'role' => $role1, 'nama_kolam' => $registrasi_kolam ]);
 
    }
	public function showsuhu(Request $request, $id)
    {   
        $registrasi_kolam = DB::table('registrasi_kolam')->where('id',$id)->value('nama_kolam');
        $tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
    	// mengambil data dari table pegawai
    	$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
    	$datasensor2 = [];
		foreach ($datasensor as $datasen){ 
		$datasensor1 = json_decode($datasen->suhu, true);
		$datasensor2[] = $datasensor1;
		}
		$date = DB::table('datasensor')->where('idkolam',$id)->get();
		//dd($date);
    	//$date2 = [];
		//foreach ($date as $dat){ 
		//$date1 = json_decode($dat->updated_at, true);
		//$date2[] = $date1;
		//}
		//$datasensor1 =$datasensor->ph;
		//$datasensor = json_decode($datasensor, true);
		//dd($datasensor);
    	return view('chartsuhu',['datasensor'=>$datasensor2, 'idkolam'=>$id, 'date'=>$date, 'role' => $role1, 'nama_kolam' => $registrasi_kolam ]);
 
    }
	public function phjson($id)
    {
    	// mengambil data dari table pegawai
    	$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
		//foreach ($datasensor as $datasen){ 
		//$datasensor1 = json_decode($datasen->ph, true);
		//$datasensor2[] = $datasensor1;
		//$datasensor2[] = $datasensor1;
		//}
		//$datasensor1 =$datasensor->ph;
		//$datasensor = json_decode($datasensor, true);
		//dd($datasensor);
		$datasensor1 = json_decode($datasensor, true);
    	return response()->json($datasensor1);
 
    }
	public function dojson($id)
    {
    	// mengambil data dari table pegawai
    	$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
		foreach ($datasensor as $datasen){ 
		$datasensor1 = json_decode($datasen->oksigen, true);
		$datasensor2[] = $datasensor1;
		//$datasensor2[] = $datasensor1;
		}
		//$datasensor1 =$datasensor->ph;
		//$datasensor = json_decode($datasensor, true);
		//dd($datasensor);
    	return response()->json($datasensor2);
 
    }
	public function suhujson($id)
    {
    	// mengambil data dari table pegawai
    	$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
		foreach ($datasensor as $datasen){ 
		$datasensor1 = json_decode($datasen->suhu, true);
		$datasensor2[] = $datasensor1;
		//$datasensor2[] = $datasensor1;
		}
		//$datasensor1 =$datasensor->ph;
		//$datasensor = json_decode($datasensor, true);
		//dd($datasensor);
    	return response()->json($datasensor2);
 
	}
}