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
		//$this->middleware("login");
    }
    public function lists()
    {
    	// mengambil data dari table pegawai
    	$registrasi_kolam = DB::table('registrasi_kolam')->get();
 
    	// mengirim data pegawai ke view index
    	return view('lists',['registrasi_kolam' => $registrasi_kolam]);
 
    }
}