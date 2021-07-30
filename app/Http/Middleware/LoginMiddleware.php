<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$tokenlogin1 = $request->session()->get('Authorization');
        //dd($tokenlogin1);
        if ($request->session()->has('Authorization')) {
			$tokenlogin = $request->session()->get('Authorization');
            $check =  User::where('token', $tokenlogin)->first();
			$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
			//$admin = 
            if (!$check) {
                return response('Anda Tidak Terdaftar', 401);
            } else {
                return $next($request);
            }
        } else {
            return redirect('/loginpage');
        }
    }
}