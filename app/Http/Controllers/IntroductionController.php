<?php

namespace App\Http\Controllers;



class IntroductionController extends Controller
{
    public function showIntroduction()
    {
        $data='App\Introduction'::first();
        $slideCert='App\SlideCertification'::get();
        $countSlide='App\SlideCertification'::get()->count();
        return view('mainPage.introduction')->with('data',$data)->with('slideCert',$slideCert)->with('countSlide',$countSlide);
    }

}
