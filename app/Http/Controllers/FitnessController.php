<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthyRequest;
use App\Http\Requests\TipRequest;
use App\Models\Healthy;
use App\Models\Tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FitnessController extends Controller
{
    public function index()
    {
        $healthyFood = Healthy::get();
        return view('fitness/healthy/index', [
            'healthyFood' => $healthyFood,
        ]);
    }

    public function storeHealthy(HealthyRequest $request)
    {
        if ($request->has('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('store'), $imageName);
        } else {
            $imageName = 'coaches.jpg';
        }
        $healthyFood = new Healthy();
        $healthyFood->title = $request->title;
        $healthyFood->protein = $request->protein;
        $healthyFood->calcium = $request->calcium;
        $healthyFood->profilePath = $imageName;
        $healthyFood->carbohydrates = $request->carbohydrates;
        $healthyFood->description = $request->description;
        $healthyFood->user_id = Auth::id();
        $healthyFood->save();
    }

    public function healthyDetails($healthyid)
    {
         $healthy = Healthy::findOrFail($healthyid);
         $post = Healthy::whereNotIn('id',[$healthyid])->inRandomOrder()->paginate(4);
        return view('fitness/healthy/details', [
            'healthy' => $healthy,
            'post' => $post,
        ]);
    }

    public function tips(){
        $tips = Tips::get();
        return view('fitness/tips/index',[
            'tips' => $tips,
        ]);
    }

    public function addTips(TipRequest $request){
        if ($request->has('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('store'), $imageName);
        } else {
            $imageName = 'coaches.jpg';
        }
        $tips = Tips::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);
        if($tips){
            return back();
        }
    }

    public function tipsDetails($tipsId){
        $tips = Tips::where('id',$tipsId)->first();
        $otherTips = Tips::whereNotIn('id',[$tipsId])->inRandomOrder()->paginate(4);
        return view('fitness/tips/details',[
            'tips' => $tips,
            'otherTips' => $otherTips,
        ]);
    }

    public function exercises(){
        
        return view('fitness/exercises/index');
    }
}
