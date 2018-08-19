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
        $response = "";
        if (Auth::attempt($credentials)) {
            $response = "success";
        }else{
            $response = "error";
        }

        return response()->json([
            "response"=>$response,
        ]);
    }
}
