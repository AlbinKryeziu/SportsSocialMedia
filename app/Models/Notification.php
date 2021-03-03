<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    protected $fillable = [
         'target_id',
         'user_id',
         'body',
         'type',
    ];

    public function user(){
        return $this->belongsTo(User::class ,'user_id','id');
    }
    public function target(){
        return $this->belongsTo(User::class ,'target_id','id');
    }
}
