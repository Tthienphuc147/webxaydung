<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function showHome()
    {
        $project='App\Project'::all()->random(6);
        $slide='App\SlideImage'::get();
        $countProject='App\Project'::get()->count();
        $countSlide='App\SlideImage'::get()->count();
        return view('mainPage.home')->with('project',$project)->with('countProject',$countProject)->with('slide',$slide)->with('countSlide',$countSlide);
    }
        
}
