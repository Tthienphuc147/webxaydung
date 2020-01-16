<?php

namespace App\Http\Controllers;



class AdvisoryCategoryController extends Controller
{
   public function showCategoryAdvisory($unsigned_name){
        $advisoryName='App\PostCategory'::where('id',$unsigned_name)->pluck('name');
        $advisory='App\Post'::where('post_category_id',$unsigned_name)->get();
        return view('mainPage.advisoryCategory')->with('advisory',$advisory)->with('advisoryName',$advisoryName[0]);     
    }
        
}
