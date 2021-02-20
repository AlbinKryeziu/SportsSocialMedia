<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{   
    
    const Required = 0;
    const Follow = 1;
    use HasFactory;

     protected $fillable =[
         'user_id',
         'friends_id',
         'status',
     ];
    

    
}
