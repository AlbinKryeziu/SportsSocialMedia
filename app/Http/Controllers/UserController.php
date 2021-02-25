<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;
use App\Http\Requests\PhotoStoreRequest;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dotenv\Validator;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Follow;
use phpDocumentor\Reflection\Types\Null_;
use SebastianBergmann\Environment\Console;

class UserController extends Controller
{
    public function index()
    {
        $post = Post::with('user', 'like', 'comments')->where('user_id',Auth::id())->orderBy('created_at', 'desc')->get();
        return view('user/user-timeline', [
            'post' => $post,
        ]);
    }
    
    public function photos()
    {
        $post = Post::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')->where('pathPhotos','!=', Null)
            ->get();
        return view('user/timeline-photos', [
            'post' => $post,
        ]);
    }

    public function friends()
    {
        $myfriends = Follow::where('user_id',Auth::id())->get();
        $count = Follow::where('user_id',Auth::id())->count();
        return view('user/timeline-friends',[
            'myfriends' =>$myfriends,
            'count' => $count,
        ]);
        
    }

    public function postProfileUpdate(Request $request)
    {
    }

    public function addPost(PostRequest $request)
    {
        
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('store'), $imageName);
        } else {
            $imageName = null;
        }

        $post = new Post();
        $post->user_id = Auth::id();
        $post->description = $request->description;
        $post->pathPhotos = $imageName;
        $post->save();
        
        if ($post) {
            return back()->with('success', 'Image created successfully!');
        } else {
            return back()->with('errors', 'Image not created successfully!');
        }
    }

    public function deletePost($postId)
    { 

        $post = Post::where('id', $postId)->delete();

        return redirect()->back();
    }

    public function aboutUs()
    {
        $basicInfo = Profile::where('user_id', Auth::id())->get();
        $education = Education::where('user_id', Auth::id())->get();
        return view('user/about-timeline', [
            'basicInfo' => $basicInfo,
            'education' => $education,
        ]);
    }

    public function editWork()
    {
        return view('user/edit-work-timeline');
    }
    public function editBasic()
    {
        return view('user/basic-info-timerline');
    }

    public function changePassword()
    {
        return view('user/edit-password-timeline');
    }

    public function showPhoto()
    {
        $photos = UserPhoto::where('user_id', Auth::id())->get();
        return view('profile/photo-user', compact('photos'));
    }

    public function unfollow($friendId){
        
        $friends = Follow::where('friends_id',$friendId)->delete();
       if($friends){
           return redirect()->back();
       }
    }
    public function changeProfile(PhotoRequest $request){
       
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('store'), $imageName);
        } 
        $user = User::where('id',Auth::id())->update([
            'profilePath' => $imageName
        ]);
        
        if ($user){
            return redirect()->back();
        }
    }
}
