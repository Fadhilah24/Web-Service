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
        if ($request->session()->has('Authorization')) {
			$tokenlogin = $request->session()->get('Authorization');
            $check =  User::where('token', $tokenlogin)->first();
			$role1  =  DB::table('users')->where('token', $tokenlogin)->value('role');
			//$admin = 
            if (!$check || $role1 !=1) {
                return response('Token Tidak Valid.', 401);
            } else {
                return $next($request);
            }
        } else {
            return response('Silahkan Masukkan Token.', 401);
        }
    }
}