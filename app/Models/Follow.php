<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = ['target_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function following(){
        return $this->belongsTo(User::class,'target_id','id');
    }
    public function followers(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
