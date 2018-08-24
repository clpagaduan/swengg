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
        $id = 0;
        if (Auth::attempt($credentials)) {
            if(Auth::user()->account_flag==0){
                $response = "not-verified";
            }else if(Auth::user()->account_flag2==0){
                $response = "not-activated";
            }else{
                $response = "success";
            }
            $id = Auth::user()->id;
        }else{
            $response = "error";
        }

        return response()->json([
            "response"=>$response,
            "userID"=>$id,
        ]);
    }
}
