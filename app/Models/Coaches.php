<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coaches extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'description',
        'profile_path',
        'user_id',
    ];
}
