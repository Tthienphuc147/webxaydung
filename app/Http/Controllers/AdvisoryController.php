<?php

namespace App\Http\Controllers;



class AdvisoryController extends Controller
{
   public function showDetail($unsigned_name){
       
         $advisory='App\Post'::where('id',$unsigned_name)->first();
        $advisoryCategory='App\Post'::where('post_category_id',$advisory->post_category_id)->get();
          return view('mainPage.advisory')->with('advisory',$advisory)->with('advisoryCategory',$advisoryCategory);

    }
        
}
