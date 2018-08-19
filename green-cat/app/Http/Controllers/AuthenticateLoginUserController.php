<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class AuthenticateLoginUserController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('swipematch');
        }
    }
}
