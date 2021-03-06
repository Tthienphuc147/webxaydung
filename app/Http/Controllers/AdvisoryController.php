<?php

namespace App\Http\Controllers;



class AdvisoryController extends Controller
{
   public function showDetail($unsigned_name){
       
         $advisory='App\Post'::where('post.id',$unsigned_name)->where('post.status',1)->join('post_category', 'post_category.id', '=', 'post.post_category_id')->first();
        $advisoryCategory='App\Post'::where('post_category_id',$advisory->post_category_id)->get();
        $listComment='App\Comment'::where('id_post',$unsigned_name)->where('status',1)->orderby('id','desc')->get();
          return view('mainPage.advisory')->with('advisory',$advisory)->with('advisoryCategory',$advisoryCategory)->with('listComment',$listComment);

    }
        
}
