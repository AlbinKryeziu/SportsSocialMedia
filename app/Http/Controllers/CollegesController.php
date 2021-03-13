<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollegesRequest;
use App\Models\Colleges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollegesController extends Controller
{
    //

    public function colleges(){
        return view('colleges/colleges');
    }

    public function collegesDetails(){

        return view('colleges/details');
    }

    public function addCollege(CollegesRequest $request){
       
        if ($request->has('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('store'), $imageName);
        } else {
            $imageName = null;
        }

        $colleges = new Colleges();
        $colleges->name = $request->name;
        $colleges->address = $request->address;
        $colleges->services = $request->services;
        $colleges->description = $request->description;
        $colleges->methodology = $request->methodology;
        $colleges->profilePath = $imageName;
        $colleges->user_id = Auth::id();
        $colleges->save();
        
    }
}
