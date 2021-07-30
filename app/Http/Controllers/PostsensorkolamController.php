<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use App\Models\SensorKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class PostsensorkolamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
	 

     public function create(Request $request, $id)
     {
       $datasensor = new SensorKolam;
	   $datasensor->idkolam = $id;
       $datasensor->ph = $request->ph;
       $datasensor->oksigen = $request->oksigen;
       $datasensor->suhu = $request->suhu;
       $datasensor->save();
       //return redirect()->route('daftar');
     }
      public function lists($id)
    {
    	$datasensor = DB::table('datasensor')->where('idkolam',$id)->get();
        
        return response()->json($datasensor);
    }
    public function index()
     {
     
       $datasensor = SensorKolam::all();
       return response()->json($datasensor);
     }
	

}