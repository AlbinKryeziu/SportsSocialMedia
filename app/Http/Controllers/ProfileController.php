<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    public function ediProfile(Request $request)
    {
       
        $profile = new Profile();
        $profile->first_name = $request->name;
        $profile->last_name = $request->surname;
        $profile->country = $request->country;
        $profile->city = $request->city;
        $profile->about_me = $request->about;
        $profile->phone = $request->phone;
        $profile->birthday = $request->birthday;
        $profile->gender = $request->gender;
        $profile->user_id = Auth::id();
        $profile->save();

        if ($profile){
           $user= User::where('id' ,Auth::id())->update([
               'name' => $request->name .' '. $request->surname,
           ]);
        }
        return redirect()->back();
    }

    public function editEducation(Request $request){

       
         $education = new Education();
         $education->degree = $request->deegre;
         $education->faculty = $request->faculty;
         $education->from = $request->from;
         $education->to = $request->to;
         $education->city = $request->city;
         $education->country = $request->country;
         $education->description = $request->description;
         $education->user_id = Auth::id();
         $education->save();
         return redirect()->back();

    }
     
}
