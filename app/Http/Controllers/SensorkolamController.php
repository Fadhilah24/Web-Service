<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use App\Models\SensorKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class SensorkolamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware("admin");
    }
    
     public function index()
     {
     
       $datasensor = SensorKolam::all();
       return response()->json($datasensor);
     }
	 public function lists()
    {
    	// mengambil data dari table pegawai
    	//$registrasi_kolam = DB::table('registrasi_kolam')->get();
 
    	// mengirim data pegawai ke view index
    	return view	('sensor');
 
    }
	 

     public function create(Request $request)
     {
       $datasensor = new SensorKolam;
	   $datasensor->id = $request->id;
       $datasensor->ph = $request->ph;
       $datasensor->oksigen = $request->oksigen;
       $datasensor->suhu = $request->suhu;
       $datasensor->save();
       //return redirect()->route('daftar');
     }

    public function update(Request $request, $id)
     { 
        $datasensor= SensorKolam::find($id);
        
        $datasensor->ph = $request->input('ph');
        $datasensor->oksigen = $request->input('oksigen');
		$datasensor->suhu = $request->input('suhu');
        $datasensor->save();
        //return response()->json($registrasikolam);
		//return redirect()->route('daftar');
     } 
   
}