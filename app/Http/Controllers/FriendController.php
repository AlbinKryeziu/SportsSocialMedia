<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class FriendController extends Controller
{
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
}
