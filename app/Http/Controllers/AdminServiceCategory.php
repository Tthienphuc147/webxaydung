<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServiceCategory;
use App\Service;


class AdminServiceCategory extends Controller
{
  
      public function showList(){
        if(Request()->session()->has('id')){
          $list='App\ServiceCategory'::orderby('id','desc')->paginate(10);
          return view('admin.mainPage.servicecategory.serviceCategory')->with('serviceCategoryList',$list);
        }

        return redirect('/showlogin');
      }
      public function showServiceCategory($id){
        if(Request()->session()->has('id')){
          $list='App\ServiceCategory'::find($id);
          return view('admin.mainPage.servicecategory.detailServiceCategory')->with('serviceCategoryDetail',$list);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\ServiceCategory'::find($id);
            $name=$request->input('name');
            if($name!=""){
              $data->name=$name;
              $data->save();
            }
            
          }
          return redirect('/admin/servicecategory');
          

        }

        return redirect('/showlogin');
      }

      public function showAdd(){
        if(Request()->session()->has('id')){
          return view('admin.mainPage.servicecategory.addServiceCategory');
        }

        return redirect('/showlogin');
      }

      public function add(Request $request){
        if(Request()->session()->has('id')){
          
            $data=new ServiceCategory();
            $name=$request->input('name');
            if($name!=""){
              $data->name=$name;
              $data->save();
              $newdata='App\ServiceCategory'::orderby('id','desc')->first();
              $dataService=new Service();
              $dataService->service_category_id=$newdata->id;
              $dataService->name_service="chưa nhập";
              $dataService->content="chưa nhập";
              $dataService->save();
          }
          return redirect('/admin/servicecategory');
        

        }

        return redirect('/showlogin');
      }
      
        
}
