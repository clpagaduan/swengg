<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutUserController extends Controller
{
    public function logout(Request $request)
    {
        if(Auth::user()){
            Auth::logout();
        }
        return redirect('/');
    }
}
