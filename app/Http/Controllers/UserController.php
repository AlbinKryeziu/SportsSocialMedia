<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoStoreRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dotenv\Validator;
use phpDocumentor\Reflection\Types\Null_;

class UserController extends Controller
{
    public function showPhoto()
    {
        $photos = UserPhoto::where('user_id', Auth::id())->get();
        return view('profile/photo-user', compact('photos'));
    }

    public function index()
    {
        $post = Post::orderBy('created_at', 'desc')->get();
        return view('user/user-timeline', [
            'post' => $post,
        ]);
    }

    public function photos()
    {
        return view('user/timeline-photos');
    }

    public function friends()
    {
        return view('user/timeline-friends');
    }

    public function postProfileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:200',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validation->errors()->first(),
            ]);
        }

        $user = User::find(Auth::id());

        if ($request->hasFile('file')) {
            $imageName = time() . '.' . $request->file->extension();
            $request->image->move(public_path('images'), $imageName);

            $user->update(['profilePath' => $imageName]);
        }

        return ['success' => true, 'message' => 'Successfully updated'];
    }

    public function addPost(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|',
        ]);

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
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

    public function aboutUs(){

        return view('user/about-timeline');
    }

    public function editWork(){

        return view('user/edit-work-timeline');
    }
    public function editBasic(){

        return view('user/basic-info-timerline');
    }

    public function changePassword(){
        
        return view('user/edit-password-timeline');
    }
}
