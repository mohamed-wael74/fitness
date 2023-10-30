<?php

namespace App\Http\Controllers;

use App\Models\Gymnastics;
use Illuminate\Http\Request;

class GymnasticsController extends Controller
{

    public function index()
    {
        $ex = Gymnastics::all();
        #dd($ex);
        return view('gymnastics.index')->with('ex',$ex);
    }

    public function create()
    {
        return view('gymnastics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'exercise_name'=>'required|string',
            'exercise_description'=>'required|string',
            'exercise_image'=>'required',
            'exercise_video'=>'required|unique:gymnastics,exercise_video'
        ]);
        $image = $request->file('exercise_image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('photos'), $image_name);
        #dd($image_name);
        $exercises = new Gymnastics();
        $exercises->exercise_name= $request->exercise_name;
        $exercises->exercise_category= $request->exercise_category;
        $exercises->exercise_description= $request->exercise_description;
        $exercises->exercise_image = $image_name;
        $exercises->exercise_video= $request->exercise_video;
        $exercises->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $exercise = Gymnastics::find($id);
        return view('gymnastics.show')->with("exercise",$exercise);
    }

    public function edit(Gymnastics $gymnastics)
    {
        //
    }

    public function update(Request $request, Gymnastics $gymnastics)
    {
        //
    }

    public function destroy(Gymnastics $gymnastics)
    {
        //
    }
}
