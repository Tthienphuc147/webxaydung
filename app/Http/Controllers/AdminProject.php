<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ProjectCategory;
use App\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AdminProject extends Controller
{
  
      public function showList(){
        if(Request()->session()->has('id')){
          $list=DB::table('project_category')
          ->join('project','project_category.id','=','project.project_category_id')
          ->orderby('project.id','desc')
          ->paginate(10);
          return view('admin.mainPage.project.project')->with('projectList',$list);
        }

        return redirect('/showlogin');
      }
      public function showProject($id){
        if(Request()->session()->has('id')){
          $list=DB::table('project_category')
          ->join('project','project_category.id','=','project.project_category_id')->where('project.id',$id)->first();
          $lists="App\ProjectCategory"::orderby('id','desc')->get();
          return view('admin.mainPage.project.detailProject')->with('projectDetail',$list)->with('projectCategory',$lists);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\Project'::find($id);
            $name_project=$request->input('name_project');
            $customer_name=$request->input('customer_name');
            $investor=$request->input('investor');
            $description=$request->input('description');
            $land_area=$request->input('land_area');
            $building_area=$request->input('building_area');
            $construction_progress=$request->input('construction_progress');
            $total_amount=$request->input('total_amount');
            $category=$request->input('project_category_id');
            $content=$request->input('content');
            if($name_project!=""){
              $data->name_project=$name_project;
            }
           
            if($customer_name!=""){
              $data->customer_name=$customer_name;
            }
               
              if($investor!=""){
              $data->investor=$investor;
            }
               
              if($description!=""){
              $data->description=$description;
            }
              
              if($land_area!=""){
              $data->land_area=$land_area;
            }
               
              if($building_area!=""){
              $data->building_area=$building_area;
            }
              
              if($construction_progress!=""){
              $data->construction_progress=$construction_progress;
            }
               
              if($total_amount!=""){
              $data->total_amount=$total_amount;
            }
               
            if($category!=""){
              $data->project_category_id=$category;
            }
              
            if($content!=""){
              $data->content=$content;
            }
            if ($request->hasFile('image')) {
              $img_file = $request->file('image');
              $img_file_extension = $img_file->getClientOriginalExtension();
              $img_file_name = $img_file->getClientOriginalName();
              $random_file_name =$img_file_name;
              while (file_exists('/public/image/project/' . $random_file_name)) {
                  $random_file_name = $img_file_name;
              }
              $img_file->move('public/image/project/', $random_file_name);
              $data->image= $random_file_name;
          }
              

            $data->save();
            
          }
          return redirect('/admin/project');

          

        }

        return redirect('/showlogin');
      }
      public function showAdd(){
        if(Request()->session()->has('id')){
          $lists="App\projectCategory"::orderby('id','desc')->get();
          return view('admin.mainPage.project.addproject')->with('projectCategory',$lists);

        }

        return redirect('/showlogin');
      }
      public function add(Request $request){
        if(Request()->session()->has('id')){
            $data=new project();

           $name_project=$request->input('name_project');
            $customer_name=$request->input('customer_name');
            $investor=$request->input('investor');
            $description=$request->input('description');
            $land_area=$request->input('land_area');
            $building_area=$request->input('building_area');
            $construction_progress=$request->input('construction_progress');
            $total_amount=$request->input('total_amount');
            $category=$request->input('project_category_id');
            $content=$request->input('content');
            if($name_project!=""){
              $data->name_project=$name_project;
            }
            if($customer_name!=""){
              $data->customer_name=$customer_name;
            }
              if($investor!=""){
              $data->investor=$investor;
            }
              if($description!=""){
              $data->description=$description;
            }
              if($land_area!=""){
              $data->land_area=$land_area;
            }
              if($building_area!=""){
              $data->building_area=$building_area;
            }
              if($construction_progress!=""){
              $data->construction_progress=$construction_progress;
            }
              if($total_amount!=""){
              $data->total_amount=$total_amount;
            }
            if($category!=""){
              $data->project_category_id=$category;
            }
            if($content!=""){
              $data->content=$content;
            }
            if ($request->hasFile('image')) {
              $img_file = $request->file('image');
              $img_file_extension = $img_file->getClientOriginalExtension();
              $img_file_name = $img_file->getClientOriginalName();
              $random_file_name =$img_file_name;
              while (file_exists('/public/image/project/' . $random_file_name)) {
                  $random_file_name = $img_file_name;
              }
              $img_file->move('public/image/project/', $random_file_name);
              $data->image= $random_file_name;
          }
          else{
            $data->image="macdinh.jpg";
          }
          
            
            $data->save();
            
          return redirect('/admin/project');
          

        }

        return redirect('/showlogin');
      }

     
        
}
