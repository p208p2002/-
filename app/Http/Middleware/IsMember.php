<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;

class IsMember
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
            if(Auth::user()->userLevel==0) //一般使用者
                return $next($request);
        
        return redirect('./login');
    }
}
