<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $users =User::where('role',1);
        return view('admin/user',[
            'users'=>$users->paginate(30),
        ]);
    }
    
}
