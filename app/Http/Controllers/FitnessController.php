<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExerciseRequest;
use App\Http\Requests\HealthyRequest;
use App\Http\Requests\TipRequest;
use App\Models\Exercise;
use App\Models\ExercisesExample;
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
        if($healthyFood){
            return back()->with('success','Health Food was created successfully');
        }
    }

    public function healthyDetails($healthyid)
    {
        $healthy = Healthy::findOrFail($healthyid);
        $post = Healthy::whereNotIn('id', [$healthyid])
            ->inRandomOrder()
            ->paginate(4);
        return view('fitness/healthy/details', [
            'healthy' => $healthy,
            'post' => $post,
        ]);
    }

    public function tips()
    {
        $tips = Tips::get();
        return view('fitness/tips/index', [
            'tips' => $tips,
        ]);
    }

    public function addTips(TipRequest $request)
    {
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
        if ($tips) {
            return back()->with('success','Tips was created successfully');
        }
    }

    public function tipsDetails($tipsId)
    {
        $tips = Tips::where('id', $tipsId)->first();
        $otherTips = Tips::whereNotIn('id', [$tipsId])
            ->inRandomOrder()
            ->paginate(4);
        return view('fitness/tips/details', [
            'tips' => $tips,
            'otherTips' => $otherTips,
        ]);
    }

    public function exercises()
    {
        $exercieses = Exercise::with('example')->get();
        return view('fitness/exercises/index',[
            'exercises' =>$exercieses
        ]);
    }

    public function addExercies()
    {
        return view('fitness/exercises/add');
    }
    public function storeExercies(ExerciseRequest $request)
    {
        $exercises = Exercise::create([
            'user_id' => Auth::id(),
        ]);
        if ($exercises) {
            if ($request->has('avatar')) {
                foreach ($request->file('avatar') as $avatar) {
                    $imageName = time() . '.' . $avatar->extension();
                    $avatar->move(public_path('store'), $imageName);
                }
            }

            for ($i = 0; $i < count($request['title']); $i++) {
                $exercisesExample = ExercisesExample::create([
                    'title' => $request['title'][$i],
                    'description' => $request['description'][$i],
                    'image' => $imageName,
                    'exercies_id' => $exercises->id,
                ]);
            }
        }
        if($exercises && $exercisesExample){
            return back()->with('success','Example was created successfully');
        }
        return back()->with('erros','Something went wrong');
    }

    public function detailsExercises($exercisesId){

        $ecersises = Exercise::with('example')->where('id',$exercisesId)->first();
        $otherExercises = Exercise::with('example')->whereNotIn('id',[$exercisesId])->get();
        return view('fitness/exercises/details',[
            'exercises' => $ecersises,
            'otherExercises' =>$otherExercises,
        ]);
    }
    
   public function healthyFood(){
       return view('fitness/healthy/food');
   }
   public function healthyDiet(){
    return view('fitness/healthy/diet');
}
public function healthyWomen(){
    return view('fitness/healthy/women');
}

}
