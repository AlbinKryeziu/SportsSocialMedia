<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow(Request $request, $user)
    {
        if (!Auth::user()->isFollowing($user)) {
            Auth::user()
                ->follows()
                ->create([
                    'target_id' => $user,
                ]);

            return back()->with('success', 'You are now friends with ');
        } else {
            return back()->with('error', 'You are already following this person');
        }
    }

    public function unfollow(Request $request, $user)
    {
        if (Auth::user()->isFollowing($user)) {
            $follow = Auth::user()
                ->follows()
                ->where('target_id', $user)
                ->first();
            $follow->delete();

            return back()->with('success', 'You are no longer friends with ');
        } else {
            return back()->with('error', 'You are not following this person');
        }
    }

    public function unfollowFortBoth(Request $request){

        return $followersId =$request->followersId;
    }
}
