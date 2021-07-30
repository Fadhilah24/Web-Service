<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware("logout");
    }

    public function index()
    {
        //$storage = storage_path();
        //dd($storage);
        return view('login');
    }
}