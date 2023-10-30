<?php

namespace App\Http\Controllers;

use App\Models\Gymnastics;
use App\Models\PersonalTrainer;
use Illuminate\Http\Request;

class PersonalTrainerController extends Controller
{

    public function index()
    {
        $trainer = PersonalTrainer::all();
        $ex = Gymnastics::all();
        return view('gymnastics.full-subscription',compact('trainer','ex'));
    }

    public function create()
    {
        return view('gymnastics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'string|required',
            'email'=>'string|email|required|unique:trainers,email',
            'phone'=>'numeric|min:11|required|unique:trainers,phone',
            'feedback'=>'string|required'
        ]);
        $trainer = new PersonalTrainer();
        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->phone = $request->phone;
        $trainer->feedback = $request->feedback;
        $trainer->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $tt = PersonalTrainer::find($id);
        return view('gymnastics.show-personal-trainer')->with("tt",$tt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalTrainer  $personalTrainer
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalTrainer $personalTrainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalTrainer  $personalTrainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalTrainer $personalTrainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalTrainer  $personalTrainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalTrainer $personalTrainer)
    {
        //
    }
}
