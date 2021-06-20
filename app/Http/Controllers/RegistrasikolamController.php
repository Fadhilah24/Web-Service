<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
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
        //$this->middleware("admin");
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
	   $registrasikolam->id = $request->id;
       $registrasikolam->nama_kolam = $request->nama_kolam;
       $registrasikolam->lokasi = $request->lokasi;
       $registrasikolam->tanggal_registrasi = $request->tanggal_registrasi;
       $registrasikolam->save();
       return response()->json($registrasikolam);
     }

     public function show($id)
     {
        $registrasikolam = RegistrasiKolam::find($id);
        return response()->json($registrasikolam);
     }

     public function update(Request $request, $id)
     { 
        $registrasikolam= RegistrasiKolam::find($id);
        
        $registrasikolam->nama_kolam = $request->input('nama_kolam');
        $registrasikolam->lokasi = $request->input('lokasi');
        $registrasikolam->save();
        return response()->json($registrasikolam);
     }

     public function destroy($id)
     {
        $registrasikolam = RegistrasiKolam::find($id);
        $registrasikolam->delete();
        return response()->json('Kolam dihapus dari sistem');
     }
   
}