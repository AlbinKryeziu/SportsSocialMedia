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
        $following = Follow::where('user_id', Auth::id())->get();
        $post = Post::with('user', 'like', 'comments')
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();
       
        return view('user/user-timeline', [
            'post' => $post,
            'following' => $following,
        ]);
    }

    public function photos()
    {
        $following = Follow::with('following')
            ->where('user_id', Auth::id())
            ->get();
        $post = Post::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->where('pathPhotos', '!=', null)
            ->get();
        return view('user/timeline-photos', [
            'post' => $post,
            'following' => $following,
        ]);
    }

    public function friends()
    {
        $following = Follow::with('following')
            ->where('user_id', Auth::id())
            ->get();
        $followers = Follow::with('followers')
            ->whereIn('target_id', [Auth::id()])
            ->get();

        $sectionfollowing = Follow::with('following')
            ->where('user_id', Auth::id())
            ->get();
        $sectionfollowers = Follow::with('followers')
            ->whereIn('target_id', [Auth::id()])
            ->get();
        return view('user/timeline-friends', [
            'following' => $following,
            'followers' => $followers,
            'sectionfollowing' => $sectionfollowing,
            'sectionfollowers' => $sectionfollowers,
        ]);
    }

    public function allNotification(){
        return view('user/notification/all-notifications');
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
        return view('user/about/about-timeline', [
            'basicInfo' => $basicInfo,
            'education' => $education,
        ]);
    }

    public function editWork()
    {
        $education = Education::where('user_id',Auth::id())->get();
        return view('user/about/edit-work-timeline',[
            'education' =>$education,
        ]);
    }
    public function editBasic()
    {
         $user = User::findOrFail(Auth::id());
         $profile =Profile::where('user_id',Auth::id())->first();
        return view('user/about/basic-info-timerline',[
            'user'=>$user,
            'profile'=>$profile
        ]);
    }

    public function changePassword()
    {
        return view('user/about/edit-password-timeline');
    }

    public function showPhoto()
    {
        $photos = UserPhoto::where('user_id', Auth::id())->get();
        return view('profile/photo-user', compact('photos'));
    }

    public function unfollow($friendId)
    {
        $friends = Follow::where('friends_id', $friendId)->delete();
        if ($friends) {
            return redirect()->back();
        }
    }
    public function changeProfile(PhotoRequest $request)
    {
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('store'), $imageName);
        }
        $profile = User::where('id', Auth::id())->first();
       
        if (file_exists(public_path('store/' . $profile->profilePath))) {
            unlink(public_path('store/' . $profile->profilePath));
        }
   
        $user = User::where('id', Auth::id())->update([
            'profilePath' => $imageName,
        ]);

        if ($user) {
            return redirect()->back();
        }
    }
    public function changeCoverPhoto(PhotoRequest $request)
    {
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('store'), $imageName);
        }
        $cover = User::where('id', Auth::id())->first();
        
        if (file_exists(public_path('store/' . $cover->coverPath))) {
            unlink(public_path('store/' . $cover->coverPath));
        }

        $user = User::where('id', Auth::id())->update([
            'coverPath' => $imageName,
        ]);

        if ($user) {
            return redirect()->back();
        }
    }
}
