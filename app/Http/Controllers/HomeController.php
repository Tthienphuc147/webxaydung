<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function showHome()
    {
        $project='App\Project'::all()->random(6);
        $countProject='App\Project'::get()->count();
        return view('mainPage.home')->with('project',$project)->with('countProject',$countProject);
    }
        
}
