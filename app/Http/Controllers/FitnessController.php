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
        if (request()->has('q')) {
            $healthyFood = Healthy::where('description', 'LIKE', '%' . request()->get('q') . '%')
                ->orWhere('title', 'LIKE', '%' . request()->get('q') . '%')
                ->simplePaginate(15);
        }
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
        if ($healthyFood) {
            return back()->with('success', 'Health Food was created successfully');
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
        if (request()->has('q')) {
            $tips = Tips::where('description', 'LIKE', '%' . request()->get('q') . '%')
                ->orWhere('title', 'LIKE', '%' . request()->get('q') . '%')
                ->simplePaginate(15);
        }
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
            return back()->with('success', 'Tips was created successfully');
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
        if (request()->has('q')) {
            $exercieses = Exercise::whereHas('example', function ($q) {
                $q->where('title', 'LIKE', '%' . request()->get('q') . '%');
            });
        }
        return view('fitness/exercises/index', [
            'exercises' => $exercieses,
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
        if ($exercises && $exercisesExample) {
            return back()->with('success', 'Example was created successfully');
        }
        return back()->with('erros', 'Something went wrong');
    }

    public function detailsExercises($exercisesId)
    {
        $ecersises = Exercise::with('example')
            ->where('id', $exercisesId)
            ->first();
        $otherExercises = Exercise::with('example')
            ->whereNotIn('id', [$exercisesId])
            ->get();
        return view('fitness/exercises/details', [
            'exercises' => $ecersises,
            'otherExercises' => $otherExercises,
        ]);
    }

    public function healthyFood()
    {
        return view('fitness/healthy/food');
    }
    public function healthyDiet()
    {
        return view('fitness/healthy/diet');
    }
    public function healthyWomen()
    {
        return view('fitness/healthy/women');
    }
    public function healthyMen()
    {
        return view('fitness/healthy/men');
    }
    public function healthyLife()
    {
        return view('fitness/healthy/life');
    }
    public function gymMen()
    {
        return view('fitness/exercises/gym_men');
    }
    public function gymWomen()
    {
        return view('fitness/exercises/women');
    }
    public function exercisesHealthy()
    {
        return view('fitness/exercises/exercises_healthy');
    }
    public function exerciseFootboller()
    {
        return view('fitness/exercises/footboller');
    }
    public function skateBoarding()
    {
        return view('freestyle/skateboarding');
    }
    public function surf()
    {
        return view('freestyle/surf');
    }
    public function ice()
    {
        return view('freestyle/ice');
    }
    public function edit($tipId)
    {
        $tip = Tips::where('id', $tipId)->first();
        return view('fitness/tips/edit', [
            'tip' => $tip,
        ]);
    }
    public function update(Request $request, $tipId)
    {
        $tip = Tips::where('id', $tipId)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        if ($tip) {
            return back()->with('success', 'Tip was updated successfully');
        }
    }
    public function delete($tipId)
    {
        $tip = Tips::where('id', $tipId)->delete();
        if ($tip) {
            return back()->with('success', 'Tip was deleted successfully');
        }
    }
}
