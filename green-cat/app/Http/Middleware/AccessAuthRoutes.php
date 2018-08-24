<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessAuthRoutes
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
        if (!Auth::user()) {  
            return redirect('/');
        }else{
            if(Auth::user()->account_flag2==0){
                return redirect('profile/'.Auth::user()->id);
            }else{
                return redirect('swipematch');
            }
        }
        return $next($request);
    }
}
