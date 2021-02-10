<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'city',
        'about_me',
        'phone',
        'birthday',
        'user_id',
        
    ];
}
