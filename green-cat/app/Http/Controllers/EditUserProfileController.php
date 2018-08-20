<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;

class EditUserProfileController extends Controller
{
    public function process(Request $request){
        $detail = UserProfile::where('userID','=',$request->userID)->first();
        $detail->photo = file_get_contents($request->photo);
        $detail->first_name= $request->first_name;
        $detail->last_name= $request->lastname;
        $detail->age= $request->age;
        $detail->description= $request->description;
        $detail->interest1= $request->interest1;
        $detail->interest2= $request->interest2;
        $detail->save();
    }
}
