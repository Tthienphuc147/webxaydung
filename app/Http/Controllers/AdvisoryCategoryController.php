<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AdvisoryCategoryController extends Controller
{
   public function showCategoryAdvisory($unsigned_name,Request $request){
        $advisoryName='App\PostCategory'::where('id',$unsigned_name)->pluck('name')->first();
        $advisoryId='App\PostCategory'::where('id',$unsigned_name)->pluck('id')->first();
        $advisory='App\Post'::where('post_category_id',$unsigned_name)->paginate(6);
        if ($request->ajax()) {
        return view('mainPage.advisoryCategoryData',compact('advisoryName','advisory','advisoryId'));
        }
        return view('mainPage.advisoryCategory',compact('advisoryName','advisory','advisoryId')); 

    }
        
}
