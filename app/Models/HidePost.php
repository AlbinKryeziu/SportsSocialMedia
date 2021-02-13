<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HidePost extends Model
{
    use HasFactory;

  protected $table = 'hide_posts';

  protected $fillable = ['user_id', 'post_id',];
}
