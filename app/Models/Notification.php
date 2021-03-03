<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
     
    const UNREAD = 0;
    const READ = 1;

    const FOLLOW = 1;
    const COMMENT = 2;
    const LIKE = 2;


    

    protected $table = 'notifications';
    protected $fillable = [
         'target_id',
         'user_id',
         'body',
         'type',
         'post_id',
    ];

    public function user(){
        return $this->belongsTo(User::class ,'user_id','id');
    }
    public function target(){
        return $this->belongsTo(User::class ,'target_id','id');
    }
}
