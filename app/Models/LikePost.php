<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePost extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'post_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    
    public function post(){
        return $this->belongsTo(Post::class,'post_id','id');
    }
    public function islike($user_id)
    {
        return (bool)$this->post()->where('user_id', $user_id)->first(['id']);
    }
}
