<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function store(Request $request){
        $ads = new Ads();
        $ads->first_name = $request->first_name;
        $ads->last_name = $request->last_name;
        $ads->city = $request->city;
        $ads->state = $request->state;
        $ads->email = $request->email;
        $ads->phone = $request->phone;
        $ads->website = $request->website;
        $ads->company = $request->company;
        $ads->invest = $request->invest;
        $ads->save();
        if($ads){
            return back()->with('success','Ads has been added successfully');
        }
    }
}
