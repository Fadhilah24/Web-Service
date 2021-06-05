<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function __construct()
    {
        
    }

    public function index()
    {
        return view('login');
    }
}