<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DateTime;
use Hash;
use Auth;
use App\UserProfile;

class ProcessSignUpController extends Controller
{
    public function process(Request $request){
        //Validation Section Here
        //By: PrivateAirJET
        // $username = User::where('username','=',$request->username)->first();
        // $username = User::where('username','=',$request->username)->first();
        // if(isset())

        //Creation of New Object Here
        //By: PrivateAirJET
        $date = new DateTime;
        $user = new User();
        $user->account_flag = 0;
        $user->account_flag2 = 0;
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

        $detail = new UserProfile();
        $detail->userID = $user->id;
        $detail->photo = null;
        $detail->first_name= null;
        $detail->last_name= null;
        $detail->age= null;
        $detail->description= null;
        $detail->interest1= null;
        $detail->interest2= null;
        $detail->created_at= $date->getTimestamp();
        $detail->updated_at= $date->getTimestamp();
        $detail->save();

        //Login the new user account here
        //By: PrivateAirJET
        // Auth::login($user);
        //Will not be login till it is verified
    }
}
