<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Notification;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function deleteNotification($notifyId)
    {
        $notification = Notification::where('id', $notifyId)->delete();
        if ($notification) {
            return redirect()->back();
        }
    }

    public function followProfile($followId, $notifyId)
    {
        $user = User::with('post')
            ->where('id', $followId)
            ->get();
        $notification = Notification::where('id', $notifyId)->update([
            'read' => Notification::READ,
        ]);
        return view('friends/friends-profile', [
            'user' => $user,
        ]);
    }

    public function commentPost($postId, $userId, $notifyId)
    {
        $notification = Notification::where('id', $notifyId)->update([
            'read' => Notification::READ,
        ]);
        $following = Follow::where('user_id', $userId)->get();
        $post = Post::with('user', 'like', 'comments')
            ->where('user_id', $userId)
            ->where('id', $postId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user/user-timeline', [
            'post' => $post,
            'following' => $following,
        ]);
    }
}
