<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\ProjectCategory;


class AdminProjectCategory extends Controller
{
     public function showList(){
        if(Request()->session()->has('id')){
          $list='App\ProjectCategory'::orderby('id','desc')->paginate(10);
          return view('admin.mainPage.projectCategory.projectCategory')->with('projectCategoryList',$list);
        }

        return redirect('/showlogin');
      }
      public function showProjectCategory($id){
        if(Request()->session()->has('id')){
          $list='App\ProjectCategory'::find($id);
          return view('admin.mainPage.projectCategory.detailProjectCategory')->with('projectCategoryDetail',$list);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\ProjectCategory'::find($id);
            $name=$request->input('name');
            if($name!=""){
              $data->name=$name;
              $data->save();
            }
            
          }
          return redirect('/admin/projectcategory');
          

        }

        return redirect('/showlogin');
      }

      public function showAdd(){
        if(Request()->session()->has('id')){
          return view('admin.mainPage.projectCategory.addProjectCategory');
        }

        return redirect('/showlogin');
      }

      public function add(Request $request){
        if(Request()->session()->has('id')){
          
            $data=new ProjectCategory();
            $name=$request->input('name');
            if($name!=""){
              $data->name=$name;
              $data->save();
          }
          return redirect('/admin/projectcategory');
        

        }

        return redirect('/showlogin');
      }
      
}
