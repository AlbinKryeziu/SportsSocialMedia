<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\HidePost;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
use Egulias\EmailValidator\Warning\Comment;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewfeedController extends Controller
{
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
        $follow = Follow::where('user_id', Auth::id())->pluck('friends_id');
        $user = User::whereNotIn('id', $follow)
            ->where('id', '!=', Auth::id())
            ->inRandomOrder()
            ->get();

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

        return  redirect()->back();
    }

    public function showHidePost(){
        $hidePost = HidePost::where('user_id', Auth::id())->get('post_id');
        $follow = Follow::where('user_id', Auth::id())->pluck('friends_id');
        $user = User::whereNotIn('id', $follow)
        ->where('id', '!=', Auth::id())
        ->inRandomOrder()
        ->get();
        
          $post = Post::with('user', 'like', 'comments')
        ->whereIn('id', $hidePost)
        ->orderBy('created_at', 'DESC')
        ->where('description', 'LIKE', '%' . request()->get('q') . '%')
        ->get();
       return view('user/hide',[
           'post' =>$post,
           'user' =>$user,
       ]);
    }

    public function unhide(Request $request){
        $postId = $request->input('postId');
        HidePost::where('post_id',$postId)->delete();

        return redirect()->back();
    }
}
