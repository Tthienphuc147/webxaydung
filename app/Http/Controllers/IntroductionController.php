<?php

namespace App\Http\Controllers;



class IntroductionController extends Controller
{
    public function showIntroduction()
    {
        $slide='App\SlideImage'::get();
        $countSlide='App\SlideImage'::get()->count();
        return view('mainPage.introduction')->with('slide',$slide)->with('countSlide',$countSlide);
    }
        
}
