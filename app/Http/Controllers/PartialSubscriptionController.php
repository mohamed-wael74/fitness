<?php

namespace App\Http\Controllers;

use App\Models\Gymnastics;
use App\Models\PartialSubscription;
use Illuminate\Http\Request;

class PartialSubscriptionController extends Controller
{

    public function index()
    {
        $ex = Gymnastics::all();
        return view('gymnastics.partial-subscription')->with('ex',$ex);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatWithUsController  $chatWithUsController
     * @return \Illuminate\Http\Response
     */
    public function show(ChatWithUsController $chatWithUsController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatWithUsController  $chatWithUsController
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatWithUsController $chatWithUsController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChatWithUsController  $chatWithUsController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatWithUsController $chatWithUsController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatWithUsController  $chatWithUsController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatWithUsController $chatWithUsController)
    {
        //
    }
}
