<?php

namespace App\Http\Controllers;



class IntroductionController extends Controller
{
    public function showIntroduction()
    {
        return view('mainPage.introduction');
    }
        
}
