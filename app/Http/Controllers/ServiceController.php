<?php

namespace App\Http\Controllers;



class ServiceController extends Controller
{
   public function showDetail($unsigned_name){

         $service='App\Service'::where('service.id',$unsigned_name)->join('service_category', 'service_category.id', '=', 'service.service_category_id')->first();
          return view('mainPage.service')->with('service',$service);
    }
        
}
