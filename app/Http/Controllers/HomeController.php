<?php

namespace App\Http\Controllers;
use App\Models\Gymnastics;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ex = Gymnastics::all();
       # dd($ex);
        return view('gymnastics.index')->with('ex',$ex);
    }
    public function adminHome()
    {
        return view('gymnastics.create');
    }
}
