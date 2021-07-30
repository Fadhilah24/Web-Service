<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use App\Models\SensorKolam;
use App\Models\InfoIkan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class JenisikanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("admin");
    }
    
     public function index($id)
     {
        $this->middleware("admin");
        //$datasensor = DB::table('datasensor')->where('idkolam',$id)->get('idkolam');
		$datasensor = $id;
		//dd($id);
        return view('tambahikan',['datasensor' => $datasensor]);
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
public function showsensor($id)
     {
        $datasensor = DB::table('datasensor')->where('id',$id)->get();
        return view('sensor',['datasensor' => $datasensor]);
		//return redirect()->route('editkolam1', ['registrasi_kolam' => $registrasi_kolam]);
     }
    public function update(Request $request, $id)
     { 
        $infoikan = new InfoIkan;
        $infoikan->idkolam = $id;
        $infoikan->jenisikan = $request->input('jenisikan');
        $infoikan->jumlahikan = $request->input('jumlahikan');
		$infoikan->tanggalikanmasuk = $request->input('tanggalikanmasuk');
        $infoikan->save();
        //return response()->json($registrasikolam);
		return redirect()->route('daftar');
     } 
   
}