<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HidePost;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'pathPhotos',
        'user_id',
    ];

    public function user(){

        return $this->belongsTo(User::class, 'user_id','id') ;
    }
    public function hidde(){

        return $this->hasMany(HidePost::class);
    }
}
