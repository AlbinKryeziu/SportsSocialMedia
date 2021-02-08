<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoStoreRequest;
use App\Models\User;
use App\Models\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addPhotoToUser(PhotoStoreRequest $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $user = new UserPhoto();
        $user->user_id = Auth::id();
        $user->profile_photo_path = $imageName;
        $user->save();
        if ($user) {
            return back()->with('success','Image created successfully!');
        } else{
            return back()->with('errors','Image not created successfully!');
        }
    }

    public function showPhoto()
    {
        $photos = UserPhoto::where('user_id', Auth::id())->get();
        return view('profile/photo-user', compact('photos'));
    }

    public function index(){
        return view('user/user-timeline');
    }

    public function photos(){

        return view('user/timeline-photos');
    }

    public function friends(){

        return view('user/timeline-friends');
    }
}
