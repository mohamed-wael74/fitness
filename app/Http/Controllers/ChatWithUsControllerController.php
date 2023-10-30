<?php

namespace App\Http\Controllers;
use App\Models\PersonalTrainer;
use App\Models\ChatWithUsController;
use Illuminate\Http\Request;

class ChatWithUsControllerController extends Controller
{

    public function index()
    {
        $t = PersonalTrainer::all();
        return view('gymnastics.chat-with-us')->with('t',$t);
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
