<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServiceCategory;
use App\Service;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AdminComment extends Controller
{
  
      public function showList($id){
        if(Request()->session()->has('id')){
          $list='App\Comment'::where('id_post',$id)
          ->orderby('id','desc')
          ->paginate(10);
          return view('admin.mainPage.comment.comment')->with('commentList',$list)->with('idpost',$id);
        }

        return redirect('/showlogin');
      }
      public function accept($idpost,$id){
        if(Request()->session()->has('id')){
          $list='App\Comment'::find($id);
          $list->status=1;
          $list->save();
          return redirect("/admin/comment/$idpost");
        }

        //return redirect('/showlogin');
      }
      public function denife($idpost,$id){
        if(Request()->session()->has('id')){
          $list='App\Comment'::find($id);
          $list->status=0;
          $list->save();
          return redirect("/admin/comment/$idpost");
        }

       // return redirect('/showlogin');
      }
      
        
}
