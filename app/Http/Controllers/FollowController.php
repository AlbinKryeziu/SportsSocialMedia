<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    
    public function follow(Request $request , $user)
    {
        
        if (!Auth::user()->isFollowing($user)) {
            // Create a new follow instance for the authenticated user
            Auth::user()->follows()->create([
                'target_id' => $user,
            ]);

            return back()->with('success', 'You are now friends with ');
        } else {
            return back()->with('error', 'You are already following this person');
        }

    }
  
}
