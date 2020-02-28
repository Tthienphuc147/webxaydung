<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServiceCategory;
use App\Service;
use App\Post;
use App\Comment;
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

        return redirect('/showlogin');
      }
      public function denife($idpost,$id){
        if(Request()->session()->has('id')){
          $list='App\Comment'::find($id);
          $list->status=0;
          $list->save();
          return redirect("/admin/comment/$idpost");
        }

        return redirect('/showlogin');
      }
      public function add(Request $request){
       
          $list=new Comment();
          $list->status=0;
          $list->id_post=$request->input('idpost');
          $comment=$request->input('comment');
          if($comment!=""){
            $list->content=$comment;
            $list->save();
          }
          
          return redirect("/advisory/$list->id_post");
        
      
        
}
