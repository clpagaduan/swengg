<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLoginRoute
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
        if (Auth::user()) {   
            //Fixed Error: Call to a member function setCookie() on null
            //By: PrivateAirJET 
            //Case: If return view('page').
            //Solution: Use return response()->view('page')
            //Problem: Will load to the current route. 
            return redirect('swipematch');
        }

        return $next($request);
    }
}
