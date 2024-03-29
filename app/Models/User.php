<?php

namespace App\Models;

use App\Http\Controllers\FollowController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;


    const Admin = 1;
    const User = 0;

    const Required = 0;
    const Follow = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }
    
    public static function getUsersByRole($role)
    {
        return User::all()->filter->hasRole($role)->values();;
    }
    
    public function isAdmin() {

        return $this->role()->where('id', 1);
    }
    public function isUser() {

        return $this->role()->where('id', 2);
    }

   public function post(){
       return $this->hasMany(Post::class);
   }
    public function friends(){
        return $this->hasMany(Follow::class,'user_id','id');
    }

    public function follows() {
        return $this->hasMany(Follow::class);
    }

    public function isFollowing($target_id)
    {
        return (bool)$this->follows()->where('target_id', $target_id)->first(['id']);
    }

    public function profile(){
        return $this->hasOne(Profile::class,'user_id','id');
    }

    public function notification(){
        return $this->hasMany(Notification::class,'user_id','id');
    }
    

}
