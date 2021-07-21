<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
class AuthController extends Controller
{
	public function __construct()
    {
        // $this->middleware("admin");
    }

    public function register(Request $request)
    {
		$this->validate($request, [
            'username'  => 'required',
            'password' => 'required|min:6',
			'role'  => 'required'
        ]);
		$slug = Str::slug('Laravel 5 Framework', '-');
        $username = $request->input("username");
        $password = $request->input("password");
		$role = $request->input("role");

        $hashPwd = Hash::make($password);
        $data = [
            "username" => $username,
            "password" => $hashPwd,
			"role" => $role
        ];



        if (User::create($data)) {
            $out = [
                "message" => "register_success",
                "code"    => 201,
            ];
        } else {
            $out = [
                "message" => "vailed_regiser",
                "code"   => 404,
            ];
        }
		return redirect('/regus');
        return response()->json($out, $out['code']);
		
    }

    public function login(Request $request)
    {
		    $this->validate($request, [
			'username'  => 'required',
            'password' => 'required|min:6'
        ]);

        $username = $request->input("username");
        $password = $request->input("password");
		
        $user = User::where("username", $username)->first();

        if (!$user) {
            $out = [
                "message" => "login_failed",
                "code"    => 401,
                "result"  => [
                    "token" => null,
                ]
            ];
            return response()->json($out, $out['code']);
    }
	if (Hash::check($password, $user->password)) {
            $newtoken  = $request->input("token");

            $user->update([
                'token' => $newtoken
            ]);
	$request->session()->put('Authorization', $newtoken);
            $out = [
                "message" => "login_success",
                "code"    => 200,
                "result"  => [
                    "token" => $newtoken,
                ]
            ];
        } else {
            $out = [
                "message" => "login_vailed",
                "code"    => 401,
                "result"  => [
                    "token" => null,
                ]
            ];
        }
	
	

    
}
function generateRandomString($length = 80)
    {
        $karakkter = '012345678dssd9abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $panjang_karakter = strlen($karakkter);
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= $karakkter[rand(0, $panjang_karakter - 1)];
        }
        return $str;
    }
public function regus()
{
 
	
	return view('regus');
}

}