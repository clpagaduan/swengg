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
        if (Auth::user()){   
            //Fixed Error: Call to a member function setCookie() on null
            //By: PrivateAirJET 
            //Case: If return view('page').
            //Solution: Use return response()->view('page')
            //Problem: Will load to the current route. 

            //Checking for the account_flag (For verifcation) is done in the Login Controller
            if(Auth::user()->account_flag2==0){
                return redirect('profile/'.Auth::user()->id);
            }else{
                return redirect('swipematch');
            }
        }else{
            return redirect('/');
        }

        return $next($request);
    }
}
