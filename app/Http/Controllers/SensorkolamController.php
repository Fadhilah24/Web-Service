<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use App\Models\SensorKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
        $this->middleware("login");
    }
    
     
	 

    
public function showsensor(Request $request, $id)
     {
		$tokenlogin = $request->session()->get('Authorization');
		$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
        $datasensor = DB::table('datasensor')->where('idkolam',$id)->where( 'created_at', '>', Carbon::now()->subDays(1))->get();
        //foreach ($datasensor as $ds){
            //$date = json_decode($ds->ph);
           // dd($date);
       // }
        
        //$datasensor1 = json_decode($datasensor[1])->created_at->format('d M');
        
		$avgph = DB::table('datasensor')->where('idkolam',$id)->avg('ph');
		$minph = DB::table('datasensor')->where('idkolam',$id)->min('ph');
		$maxph = DB::table('datasensor')->where('idkolam',$id)->max('ph');
		$avgdo = DB::table('datasensor')->where('idkolam',$id)->avg('oksigen');
		$mindo = DB::table('datasensor')->where('idkolam',$id)->min('oksigen');
		$maxdo = DB::table('datasensor')->where('idkolam',$id)->max('oksigen');
		$avgsuhu = DB::table('datasensor')->where('idkolam',$id)->avg('suhu');
		$minsuhu = DB::table('datasensor')->where('idkolam',$id)->min('suhu');
		$maxsuhu = DB::table('datasensor')->where('idkolam',$id)->max('suhu');
		//dd($avgph);
        return view('sensor',['avgph' => $avgph, 'datasensor'=>$datasensor,'minph'=>$minph,'maxph'=>$maxph,
			'avgdo' => $avgdo,'mindo'=>$mindo,'maxdo'=>$maxdo,'avgsuhu' => $avgsuhu,
			'minsuhu'=>$minsuhu,'maxsuhu'=>$maxsuhu, 'idkolam'=>$id, 'role' => $role1]);
		//return redirect()->route('editkolam1', ['registrasi_kolam' => $registrasi_kolam]);
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