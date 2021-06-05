<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

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
        //if ($request->input('token')) {
			if ($request->header('Authorization')) {
			$key = explode(' ',$request->header('Authorization'));
			$check =  User::where('token', $key[1])->first();
			$role  =  $check->role;
			//$admin = 
            if (!$check or $role!=2) {
                return response('Token Tidak Valid.', 401);
            } else {
                return $next($request);
            }
        } else {
            return response('Silahkan Masukkan Token.', 401);
        }
    }
}
