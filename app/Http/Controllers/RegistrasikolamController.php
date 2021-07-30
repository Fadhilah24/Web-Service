<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use App\Models\SensorKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class RegistrasikolamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware("login");
		$this->middleware("admin");
    }
    
     public function index()
     {
     
       $registrasikolam = RegistrasiKolam::all();
       return response()->json($registrasikolam);
     }
	 
	public function input()
{
 
	return view('input');
 
}
     public function create(Request $request)
     {
       $registrasikolam = new RegistrasiKolam;
	   //$datasensor = new SensorKolam;
	   $registrasikolam->id = $request->id;
       $registrasikolam->nama_kolam = $request->nama_kolam;
       $registrasikolam->lokasi = $request->lokasi;
       $registrasikolam->tanggal_registrasi = $request->tanggal_registrasi;
       $registrasikolam->save();
	   //$datasensor->id = $request->id;
	   //$datasensor->save();
       return redirect()->route('daftar');
     }

     public function show($id)
     {
        $registrasikolam = RegistrasiKolam::find($id);
        return response()->json($registrasikolam);
     }
	public function editkolam($id)
     {
        $registrasi_kolam = DB::table('registrasi_kolam')->where('id',$id)->get();
        return view('editkolam',['registrasi_kolam' => $registrasi_kolam]);
		//return redirect()->route('editkolam1', ['registrasi_kolam' => $registrasi_kolam]);
     }
     public function update(Request $request, $id)
     { 
        $registrasikolam= RegistrasiKolam::find($id);
        
        $registrasikolam->nama_kolam = $request->input('nama_kolam');
        $registrasikolam->lokasi = $request->input('lokasi');
        $registrasikolam->save();
        //return response()->json($registrasikolam);
		return redirect()->route('daftar');
     }


     public function destroy($id)
     {
        //$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
        $registrasikolam = RegistrasiKolam::find($id);
        $registrasikolam->delete();
        DB::table('datasensor')->where('idkolam',$id)->delete();
        //$datasensor->delete();
        return redirect()->route('daftar');
     }
   
}