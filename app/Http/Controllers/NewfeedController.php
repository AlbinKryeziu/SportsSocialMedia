<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\HidePost;
use App\Models\LikePost;
use App\Models\Notification;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
use Egulias\EmailValidator\Warning\Comment;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewfeedController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        if (request()->has('q')) {
            $hidePost = HidePost::where('user_id', Auth::id())->get('post_id');
            $post = Post::with('user', 'like', 'comments')
                ->whereNotIn('id', $hidePost)
                ->orderBy('created_at', 'DESC')
                ->where('description', 'LIKE', '%' . request()->get('q') . '%')
                ->get();
        }
  
        $hidePost = HidePost::where('user_id', Auth::id())->get('post_id');
        $post = Post::with('user', 'like', 'comments')
            ->whereNotIn('id', $hidePost)
            ->orderBy('created_at', 'DESC')
            ->where('description', 'LIKE', '%' . request()->get('q') . '%')
            ->get();
           
        $following = Follow::where('user_id', Auth::id())->pluck('target_id');
        if ($following) {
            $user = User::whereNotIn('id', $following)
                ->whereNotIn('id', [Auth::id()])
                ->where('role', 1)
                ->get();
        } else {
            $user = User::where('id', '!=', Auth::id())
                ->where('role', 1)
                ->get();
        }

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

    public function storeComment(Request $request)
    {
        $data = PostComment::create([
            'user_id' => Auth::id(),
            'post_id' => $request->postId,
            'comment' => $request->comment,
        ]);
        $post = Post::where('id', $request->postId)->pluck('user_id');
        if ($post = Auth::id()) {
            return redirect()->back();
        }
        if ($data) {
            $notification = Notification::create([
                'user_id' => $request->user_id,
                'target_id' => Auth::id(),
                'type' => Notification::COMMENT,
                'body' => 'Comment on your post',
                'post_id' => $request->postId,
            ]);
        }

        return redirect()->back();
    }

    public function showHidePost()
    {
        $hidePost = HidePost::where('user_id', Auth::id())->get('post_id');
        $follow = Follow::where('user_id', Auth::id())->pluck('target_id');
        $user = User::whereNotIn('id', $follow)->where('role',1)
            ->where('id', '!=', Auth::id())
            ->inRandomOrder()
            ->get();

        $post = Post::with('user', 'like', 'comments')
            ->whereIn('id', $hidePost)
            ->orderBy('created_at', 'DESC')
            ->where('description', 'LIKE', '%' . request()->get('q') . '%')
            ->get();
        return view('user/hide', [
            'post' => $post,
            'user' => $user,
        ]);
    }

    public function unhide(Request $request)
    {
        $postId = $request->input('postId');
        HidePost::where('post_id', $postId)->delete();

        return redirect()->back();
    }

    public function deleteComent(Request $request)
    {
        $commentId = $request->commentId;
        $comment = PostComment::where('id', $commentId)->delete();
        return redirect()->back();
    }

    public function likePost($postId){
        $postLike = LikePost::create([
            'user_id' =>Auth::id(),
            'post_id' =>$postId,
        ]);
        $post =Post::where('id',$postId)->first();
        if ($post->user_id == Auth::id()) {
            return redirect()->back();
        }
        if ($postLike) {
          
            $notification = Notification::create([
                'user_id' => $post->user_id,
                'target_id' => Auth::id(),
                'type' => Notification::COMMENT,
                'body' => 'Like  your post',
                'post_id' => $post->id,
            ]);
        }
        return redirect()->back();
    }

    public function dislike($postId){
        $dislike = LikePost::where('post_id',$postId)->where('user_id',Auth::id())->delete();
        return redirect()->back();

    }
}
