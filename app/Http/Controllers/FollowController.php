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

    public function unfollowFortBoth(Request $request)
    {
        $followersId = $request->followersId;

        $unfollow = Follow::where('user_id', Auth::id())
            ->where('target_id', $followersId)
            ->delete();
        if ($unfollow) {
            Follow::where('user_id', $followersId)
                ->where('target_id', Auth::id())
                ->delete();
        }
        return redirect()->back();
    }
}
