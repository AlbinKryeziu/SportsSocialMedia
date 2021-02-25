<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function followUser(Request $request){
 
       $follow = Follow::create([
            'user_id' =>Auth::id(),
            'friends_id' =>$request->friendsId,
            'status'=>Follow::Follow,
        ]);
        return redirect()->back();

    }
   
  
}
