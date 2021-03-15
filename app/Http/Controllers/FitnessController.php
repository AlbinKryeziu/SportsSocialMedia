<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthyRequest;
use App\Models\Healthy;
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
}
