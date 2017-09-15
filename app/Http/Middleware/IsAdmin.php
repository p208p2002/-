<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;

class IsAdmin
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
        if (Auth::check()) 
            if(Auth::user()->userLevel==5) //確認是網站管理員
                return $next($request);
        
        return redirect('./login?redirect=webAdmin');
    }
}
