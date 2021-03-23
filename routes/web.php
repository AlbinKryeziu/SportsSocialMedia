<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CollegesController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\NewfeedController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\FitnessController;
use App\Http\Controllers\UserController;
use App\Models\Follow;
use App\Models\User;
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
    if (Auth::user()->role == 1) {
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
    } elseif (Auth::user()->role == 2) {
        $users = User::where('role', 1)->get();
        return view('admin/user', [
            'users' => $users,
        ]);
    }
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/how-it-works', function () {
    return view('how-it-works');
});

// Route::get('/sports/football', function () {
//     return view('sports/football');
// });

Route::get('/sports/baseball', function () {
    return view('sports/baseball');
});

Route::get('/sports/basketball', function () {
    return view('sports/basketball');
});

// Route::get('/sports/tennis', function () {
//     return view('sports/tennis');
// });

// Route::get('/sports/hockey', function () {
//     return view('sports/hockey');
// });

// Route::get('/sports/boxing', function () {
//     return view('sports/boxing');
// });

Route::get('/sports/table-tennis', function () {
    return view('sports/table-tennis');
});
Route::get('/ads', function () {
    return view('ads');
});
Route::get('/evnts', function () {
    return view('events');
});

Route::get('/sports/soccer', [SportController::class, 'soccer']);
Route::get('/sports/basketballapi', [SportController::class, 'basketball']);
Route::get('/sports/baseballapi', [SportController::class, 'baseball']);
Route::get('/sports/hockey', [SportController::class, 'hockey']);
Route::get('/sports/boxing', [SportController::class, 'boxing']);
Route::get('/sports/football', [SportController::class, 'football']);
Route::get('/sports/tennis', [SportController::class, 'tennis']);
Route::get('/sports/volleyball', [SportController::class, 'volleyball']);
Route::get('/sports/handball', [SportController::class, 'handball']);
Route::get('/sports/netball', [SportController::class, 'netball']);
Route::get('/sports/rugby', [SportController::class, 'rugby']);
Route::get('/sports/cycling', [SportController::class, 'cycling']);
Route::get('/sports/motorsport', [SportController::class, 'motorSport']);
Route::get('/sports/golf', [SportController::class, 'golf']);
Route::get('/sports/snooker', [SportController::class, 'snooker']);



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
Route::post('/photo/profile/user', [UserController::class, 'changeProfile'])->name('changeProfile');
Route::post('/cover/profile/user', [UserController::class, 'changeCoverPhoto'])->name('changeProfile');
Route::get('/notification', [UserController::class, 'allNotification'])->name('allNotification');
Route::get('/notification/delete/{notifyId}', [UserController::class, 'allNotification']);

//profile controller
Route::post('/change/profile', [ProfileController::class, 'ediProfile'])->name('changeProfile');
Route::post('/change/education', [ProfileController::class, 'editEducation'])->name('editEducation');
Route::get('/edit/education/{educationid}', [ProfileController::class, 'editEducationForm']);
Route::post('/update/education', [ProfileController::class, 'updateEducation']);
Route::post('/delete/education', [ProfileController::class, 'deleteEducation']);

//new feed

Route::get('newfeed', [NewfeedController::class, 'index']);
Route::post('newfeed/delete/post', [NewfeedController::class, 'deletePostFeed']);
Route::post('newfeed/hidde/post', [NewfeedController::class, 'hiddePost']);
Route::post('newfeed/comment/create', [NewfeedController::class, 'storeComment'])->name('storePost');
Route::get('newfeed/hide/post', [NewfeedController::class, 'showHidePost'])->name('showHidePost');
Route::post('newfeed/unhide/post', [NewfeedController::class, 'unhide'])->name('unhide');
Route::post('delete/comment', [NewfeedController::class, 'deleteComent']);
Route::get('like/post/{postId}', [NewfeedController::class, 'likePost']);
Route::get('dislike/post/{postId}', [NewfeedController::class, 'dislike']);

//friends

Route::get('friends/profile/{userId}', [FriendController::class, 'friendsProfile']);
Route::get('friends/photo/{userId}', [FriendController::class, 'friendsPhoto']);
Route::get('friends/about/{userId}', [FriendController::class, 'aboutFriends']);

//follow urser

Route::post('follow/{user}', [FollowController::class, 'follow']);
Route::post('unfollow/{user}', [FollowController::class, 'unfollow']);
Route::post('unfollow/user/all', [FollowController::class, 'unfollowFortBoth']);
Route::post('delete/followers/{followerId}', [FollowController::class, 'deleteFollowers']);

Route::post('/notification/delete/{notifyId}', [NotificationController::class, 'deleteNotification']);
Route::get('/follow/profile/{followId}/{notifyId}', [NotificationController::class, 'followProfile']);
Route::get('/post/comment/{postId}/{userId}/{notifyId}', [NotificationController::class, 'commentPost']);

Route::get('/admin/user/all', [AdminUserController::class, 'index']);

Route::get('/colleges', [CollegesController::class, 'colleges']);
Route::get('/info/colleges/{collegeId}', [CollegesController::class, 'collegesDetails']);
Route::post('/add/colleges', [CollegesController::class, 'addCollege']);
Route::get('/coaches', [CollegesController::class, 'coaches']);
Route::post('/coaches/store', [CollegesController::class, 'storeCoaches']);
Route::get('/coaches/details/{coachesId}', [CollegesController::class, 'coacheDetails']);

Route::get('/healthy', [FitnessController::class, 'index']);
Route::post('/healthy/store', [FitnessController::class, 'storeHealthy']);
Route::get('/healthy/more/{healthyid}', [FitnessController::class, 'healthyDetails']);
Route::get('/tips', [FitnessController::class, 'tips']);
Route::post('/tips/add', [FitnessController::class, 'addTips']);
Route::get('/tips/details/{tipsId}', [FitnessController::class, 'tipsDetails']);
Route::get('/exercises', [FitnessController::class, 'exercises']);
Route::get('/add/exercises', [FitnessController::class, 'addExercies']);
Route::post('/add/store', [FitnessController::class, 'storeExercies']);
Route::get('exercises/details/{exercisesId}', [FitnessController::class, 'detailsExercises']);
