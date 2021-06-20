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
        if ($request->header('Authorization')) {
            $check =  User::where('token', $request->header('Authorization'))->first();
			$role  =  User::where('role', 100)->first();
			//$admin = 
            if (!$check && $role) {
                return response('Token Tidak Valid.', 401);
            } else {
                return $next($request);
            }
        } else {
            return response('Silahkan Masukkan Token.', 401);
        }
    }
}