<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServiceCategory;
use App\Service;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AdminPost extends Controller
{
  
      public function showList(){
        if(Request()->session()->has('id')){
          $list=DB::table('post_category')
          ->join('post','post_category.id','=','post.post_category_id')
          ->where('status',1)
          ->orderby('post.id','desc')
          ->paginate(10);
          $listfalsestatus=DB::table('post_category')
          ->join('post','post_category.id','=','post.post_category_id')
          ->where('status',0)
          ->orderby('post.id','desc')
          ->paginate(10);
          return view('admin.mainPage.post.post')->with('postList',$list)->with('postListCheck',$listfalsestatus);
        }

        return redirect('/showlogin');
      }
      public function showPost($id){
        if(Request()->session()->has('id')){
          $list='App\Post'::find($id);
          $lists="App\PostCategory"::orderby('id','desc')->get();
          return view('admin.mainPage.post.detailPost')->with('postDetail',$list)->with('postCategory',$lists);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\Post'::find($id);
            $content=$request->input('noidung');
            $name=$request->input('name');
            $description=$request->input('tomtat');
            $category=$request->input('category');
            if($name!=""){
              $data->name_post=$name;
              
            }
            if($content!=""){
              $data->content=$content;
            }
            if($description!=""){
              $data->description=$description;
            }
            if($category!=""){
              $data->post_category_id=$category;
            }
            if ($request->hasFile('anhgioithieu')) {
              $img_file = $request->file('anhgioithieu');
              $img_file_extension = $img_file->getClientOriginalExtension();
              $img_file_name = $img_file->getClientOriginalName();
              $random_file_name =$img_file_name;
              while (file_exists('/public/image/advisory/' . $random_file_name)) {
                  $random_file_name = $img_file_name;
              }
              $img_file->move('public/image/advisory/', $random_file_name);
              $data->image= $random_file_name;
          }
          $data->status=0;
            $data->save();
            
          }
          return redirect('/admin/post');
          

        }

        return redirect('/showlogin');
      }
      public function showAdd(){
        if(Request()->session()->has('id')){
          $lists="App\PostCategory"::orderby('id','desc')->get();
          return view('admin.mainPage.post.addPost')->with('postCategory',$lists);

        }

        return redirect('/showlogin');
      }
      public function add(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
            $data=new Post();
            $content=$request->input('noidung');
            $name=$request->input('name');
            $description=$request->input('tomtat');
            $category=$request->input('category');
            if($name!=""){
              $data->name_post=$name;
              
            }
            else{
              $data->name_post="chưa nhập";
            }
            if($content!=""){
              $data->content=$content;
            }
            else{
              $data->content="chưa nhập";
            }
            if($description!=""){
              $data->description=$description;
            }
            else {
              $data->description="chưa nhập";
            }
            if($category!=""){
              $data->post_category_id=$category;
            }
            else{
              $data->post_category_id=1;
            }
            if ($request->hasFile('anhgioithieu')) {
              $img_file = $request->file('anhgioithieu');
              $img_file_extension = $img_file->getClientOriginalExtension();
              $img_file_name = $img_file->getClientOriginalName();
              $random_file_name =$img_file_name;
              while (file_exists('/public/image/advisory/' . $random_file_name)) {
                  $random_file_name = $img_file_name;
              }
              $img_file->move('public/image/advisory/', $random_file_name);
              $data->image= $random_file_name;
            }
            else{
              $data->image="macdinh.jpg";
            }
            $data->status=0;
            $data->save();
            
          return redirect('/admin/post');
          

        }

        return redirect('/showlogin');
      }

     
      public function changeStatus($id){
        if(Request()->session()->has('id')&&Request()->session()->get('role')==1){
            $data='App\Post'::find($id);
            if(!is_null($data)){
              $data->status=1;
              $data->save();
            }
        }

        return redirect('/admin/post');
      }
        
}
