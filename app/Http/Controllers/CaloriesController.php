<?php

namespace App\Http\Controllers;

use App\Models\Calories;
use Illuminate\Http\Request;

class CaloriesController extends Controller
{
    public function index()
    {
        $ca = Calories::all();
        #dd($ex);
        return view('calories.index-calories')->with('ca',$ca);
    }

    public function create()
    {
        return view('calories.enter-calories');
    }

    public function calculate(Request $request){
        
    }
    public function store(Request $request)
    {
        //
    }

    public function show(Calories $calories)
    {
        //
    }


    public function edit(Calories $calories)
    {
        //
    }

    public function update(Request $request, Calories $calories)
    {
        //
    }

    public function destroy(Calories $calories)
    {
        //
    }
}
