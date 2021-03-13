<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollegesRequest;
use App\Models\Colleges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollegesController extends Controller
{
    //

    public function colleges()
    {
        $colleges = Colleges::simplePaginate(25);
        return view('colleges/colleges', [
            'colleges' => $colleges,
        ]);
    }

    public function collegesDetails($collegeId)
    {
        $college =Colleges::find($collegeId);
        return view('colleges/details',[
            'college' => $college,
        ]);
    }

    public function addCollege(CollegesRequest $request)
    {
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
        $colleges->city = $request->city;
        $colleges->country = $request->country;
        $colleges->user_id = Auth::id();
        $colleges->save();
    }
}
