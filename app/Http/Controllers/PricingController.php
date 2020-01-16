<?php

namespace App\Http\Controllers;



class PricingController extends Controller
{
   public function showDetail($unsigned_name){
      
        $pricing='App\Pricing'::where('id',$unsigned_name)->first();
          return view('mainPage.pricing')->with('pricing',$pricing);

    }
        
}
