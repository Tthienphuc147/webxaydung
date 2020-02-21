<?php

namespace App\Http\Controllers;



class IntroductionController extends Controller
{
    public function showIntroduction()
    {
        $data='App\Introduction'::first();
        return view('mainPage.introduction')->with('data',$data);
    }
        
}
