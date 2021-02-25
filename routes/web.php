<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\NewfeedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\UserController;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('new-home');
});
Route::get('/contact', function () {
    return view('contact-us');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(Auth::user()->role == 1){
        $myfriends = Follow::where('user_id',Auth::id())->get();
        $count = Follow::where('user_id',Auth::id())->count();
        return view('user/timeline-friends',[
            'myfriends'=> $myfriends,
            'cont' =>$count
        ]);
    }
});

Route::get('/about-us', function () {
    return view('about-us');
});


Route::get('/how-it-works', function () {
    return view('how-it-works');
});

Route::get('/sports/soccer', function () {
    return view('sports/soccer');
});

Route::get('/sports/football', function () {
    return view('sports/football');
});

Route::get('/sports/baseball', function () {
    return view('sports/baseball');
});

Route::get('/sports/basketball', function () {
    return view('sports/basketball');
});

Route::get('/sports/tennis', function () {
    return view('sports/tennis');
});

Route::get('/sports/hockey', function () {
    return view('sports/hockey');
});

Route::get('/sports/boxing', function () {
    return view('sports/boxing');
});

Route::get('/sports/table-tennis', function () {
    return view('sports/table-tennis');
});
Route::get('/ads', function () {
    return view('ads');
});
Route::get('/evnts', function () {
    return view('events');
});

Route::get('/sports/footballapi', [SportController::class, 'football']);
Route::get('/sports/basketballapi', [SportController::class, 'basketball']);
Route::get('/sports/baseballapi', [SportController::class, 'baseball']);

//User photo 
Route::get('/user/photo', [UserController::class, 'index'])->name('userPost');
Route::post('/user/addphoto', [UserController::class, 'addPhotoToUser']);

Route::get('/photos/me ', [UserController::class, 'photos'])->name('photos');
Route::get('/aboutUs', [UserController::class, 'aboutUs'])->name('aboutUs');
Route::get('/edit/user', [UserController::class, 'editWork'])->name('editWork');
Route::get('/edit/info', [UserController::class, 'editBasic'])->name('editBasic');
Route::get('/edit/pswd', [UserController::class, 'changePassword'])->name('changePassword');
Route::get('/friends', [UserController::class, 'friends'])->name('friends');
Route::post('/addprofile', [UserController::class, 'postProfileUpdate'])->name('postProfileUpdate');
Route::post('/addPost', [UserController::class, 'addPost'])->name('addPost');
Route::post('/delete/post/{postId}', [UserController::class, 'deletePost'])->name('deletePost');
Route::post('/unfollo/friends/{friendsId}', [UserController::class, 'unfollow'])->name('unfollow');
Route::post('/photo/profile/user', [UserController::class, 'changeProfile'])->name('changeProfile');


//profile controller
Route::post('/change/profile', [ProfileController::class, 'ediProfile'])->name('changeProfile');
Route::post('/change/education', [ProfileController::class, 'editEducation'])->name('editEducation');

//new feed 

Route::get('newfeed', [NewfeedController::class,'index']);
Route::post('newfeed/delete/post', [NewfeedController::class,'deletePostFeed']);
Route::post('newfeed/hidde/post', [NewfeedController::class,'hiddePost']);
Route::post('newfeed/comment/create', [NewfeedController::class,'storeComment'])->name('storePost');

//friends

Route::get('friends/profile/{userId}', [FriendController::class,'friendsProfile']);
Route::get('friends/photo/{userId}', [FriendController::class,'friendsPhoto']);


//follow urser


Route::post('follow/user',[FollowController::class,'followUser']);



