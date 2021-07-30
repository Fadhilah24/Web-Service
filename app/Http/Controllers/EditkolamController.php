<?php

namespace App\Http\Controllers;
use App\Models\RegistrasiKolam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class EditkolamController extends Controller
{
	
    public function index()
    {
    	// mengambil data dari table pegawai
 
    	// mengirim data pegawai ke view index
    	return view('editkolam');
 
    }
}