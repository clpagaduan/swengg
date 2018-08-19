<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DateTime;
use Hash;

class ProcessSignUpController extends Controller
{
    public function process(Request $request){
        
        $date = new DateTime;
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->dlsuID = $request->dlsuID;
        $user->remember_token = null;
        $user->created_at =  $date->getTimestamp();
        $user->updated_at =  $date->getTimestamp();
        $user->description = "N/A";
        $user->account_type = "Regular";
        $user->daily_back = 0;
        $user->image = null;
        $user->save();

        $credentials = $request->only($username, $password);
        $response = "";
        if (Auth::attempt($credentials)) {
            $response = "success";
        }

        return response()->json([
            "response"=>$response,
        ]);
    }
}
