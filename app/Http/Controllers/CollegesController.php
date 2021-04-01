<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoachesRequest;
use App\Http\Requests\CollegesRequest;
use App\Models\Coaches;
use App\Models\Colleges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollegesController extends Controller
{
    //

    public function colleges()
    {
        $colleges = Colleges::simplePaginate(15);
        if (request()->has('q')) {
            $colleges = Colleges::where('description', 'LIKE', '%' . request()->get('q') . '%')
                ->orWhere('name', 'LIKE', '%' . request()->get('q') . '%')
                ->simplePaginate(15);
        }
        return view('colleges/colleges', [
            'colleges' => $colleges,
        ]);
    }

    public function collegesDetails($collegeId)
    {
        $college = Colleges::find($collegeId);
        $otherCollege = Colleges::whereNotIn('id', [$collegeId])
            ->inRandomOrder()
            ->simplePaginate(4);
        return view('colleges/details', [
            'college' => $college,
            'otherCollege' => $otherCollege,
        ]);
    }
    public function collegeFrom()
    {
        return view('colleges/add');
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
        $colleges->profilePath = $imageName;
        $colleges->user_id = Auth::id();
        $colleges->save();
        if ($colleges) {
            return back()->with('success', 'College was created successfully');
        }
    }

    public function coaches()
    {
        $coaches = Coaches::simplePaginate(20);
        return view('coaches/index', [
            'coaches' => $coaches,
        ]);
    }

    public function storeCoaches(CoachesRequest $request)
    {
        if ($request->has('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('store'), $imageName);
        } else {
            $imageName = 'coaches.jpg';
        }

        $coaches = new Coaches();
        $coaches->name = $request->name;
        $coaches->address = $request->address;
        $coaches->description = $request->description;
        $coaches->city = $request->city;
        $coaches->country = $request->country;
        $coaches->profile_path = $imageName;
        $coaches->user_id = Auth::id();
        $coaches->save();
        if ($coaches) {
            return back()->with('success', 'Coaches was created successfully');
        }
    }

    public function coacheDetails($choacesId)
    {
        $coaches = Coaches::findOrFail($choacesId);
        $otherCoaches = Coaches::whereNotIn('id', [$choacesId])
            ->inRandomOrder()
            ->simplePaginate(4);
        return view('coaches/details', [
            'coaches' => $coaches,
            'otherCoaches' => $otherCoaches,
        ]);
    }
    public function information()
    {
        return view('colleges/information');
    }

    public function footballColege()
    {
        return view('colleges/football');
    }
    public function basketballCollge()
    {
        return view('colleges/basketball');
    }
    public function soccerCollege()
    {
        return view('colleges/soccer');
    }
    public function bestCollegesAmerican()
    {
        return view('colleges/bestCollegeAmerican');
    }
}
