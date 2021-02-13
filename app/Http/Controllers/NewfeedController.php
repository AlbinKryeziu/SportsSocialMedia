<?php

namespace App\Http\Controllers;

use App\Models\HidePost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewfeedController extends Controller
{
    public function index()
    {
        $hidePost = HidePost::where('user_id', Auth::id())->get('post_id');
        $post = Post::with('user')
            ->whereNotIn('id', $hidePost)
            ->inRandomOrder()
            ->get();
        $user = User::where('id', '!=', Auth::id())
            ->inRandomOrder()
            ->paginate(30);

        return view('user/newfeed/newfeed', [
            'post' => $post,
            'user' => $user,
        ]);
    }

    public function deletePostFeed(Request $request)
    {
        $postId = $request->input('postId');

        $post = Post::where('id', $postId)->delete();

        return redirect()->back();
    }

    public function hiddePost(Request $request)
    {
        $postId = $request->input('postId');

        HidePost::create([
            'user_id' => Auth::id(),
            'post_id' => $postId,
        ]);

        return redirect()->back();
    }
}
