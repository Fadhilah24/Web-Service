<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class AdminMiddleware
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
			
            if (!$check || $role1 !=2) {
                return response('Anda Bukan Admin', 401);
            } else {
                return $next($request);
            }
        } else {
            return response('Silahkan Masukkan Token.', 401);
        }
    }
}