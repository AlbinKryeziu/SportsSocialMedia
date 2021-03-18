<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExercisesExample extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'exercies_id',
    ];
}
