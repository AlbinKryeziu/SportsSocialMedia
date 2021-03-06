<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;

class FriendController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function friendsProfile($userId){

        $user = User::with('post')->where('id',$userId)->get();
       
        return view('friends/friends-profile' ,[
           'user' => $user,
        ]);
    }
    public function friendsPhoto($userId){

        $user = User::with('post')->where('id',$userId)->get();

       return view('friends/friends-photo',[

            'user' => $user,
       ]);
    }

    public function aboutFriends($userId){
        $user = User::with('profile')->where('id',$userId)->get();
        $profile = Profile::where('user_id',$userId)->first();
        $education = Education::where('user_id',$userId)->get();
        return view('friends/friends-about',[
        'user' => $user,
        'education' =>$education,
        'profile' =>$profile,
       ]);
    }

    
    
}
