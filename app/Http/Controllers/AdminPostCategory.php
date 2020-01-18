<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServiceCategory;
use App\Service;
use App\PostCategory;


class AdminPostCategory extends Controller
{
  
      public function showList(){
        if(Request()->session()->has('id')){
          $list='App\PostCategory'::orderby('id','desc')->paginate(10);
          return view('admin.mainPage.postcategory.postCategory')->with('postCategoryList',$list);
        }

        return redirect('/showlogin');
      }
      public function showPostCategory($id){
        if(Request()->session()->has('id')){
          $list='App\PostCategory'::find($id);
          return view('admin.mainPage.postcategory.detailPostCategory')->with('postCategoryDetail',$list);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\PostCategory'::find($id);
            $name=$request->input('name');
            if($name!=""){
              $data->name=$name;
              $data->save();
            }
            
          }
          return redirect('/admin/postcategory');
          

        }

        return redirect('/showlogin');
      }

      public function showAdd(){
        if(Request()->session()->has('id')){
          return view('admin.mainPage.postcategory.addPostCategory');
        }

        return redirect('/showlogin');
      }

      public function add(Request $request){
        if(Request()->session()->has('id')){
          
            $data=new PostCategory();
            $name=$request->input('name');
            if($name!=""){
              $data->name=$name;
              $data->save();
          }
          return redirect('/admin/postcategory');
        

        }

        return redirect('/showlogin');
      }
      
        
}
