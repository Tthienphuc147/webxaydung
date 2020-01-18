<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServiceCategory;
use App\Service;
use Illuminate\Support\Facades\DB;


class AdminService extends Controller
{
  
      public function showList(){
        if(Request()->session()->has('id')){
          $list=DB::table('service')
          ->join('service_category','service.service_category_id','=','service_category.id')
          ->orderby('service.id','desc')
          ->paginate(10);
          return view('admin.mainPage.service.service')->with('serviceList',$list);
        }

        return redirect('/showlogin');
      }
      public function showService($id){
        if(Request()->session()->has('id')){
          $list='App\Service'::find($id);
          return view('admin.mainPage.service.detailService')->with('serviceDetail',$list);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\Service'::find($id);
            $content=$request->input('noidung');
            $name=$request->input('name');
            if($name!=""){
              $data->name=$name;
              
            }
            if($content!=""){
              $data->content=$content;
            }
            $data->save();
            
          }
          return redirect('/admin/service');
          

        }

        return redirect('/showlogin');
      }

     
      public function showmau(){
        if(Request()->session()->has('id')){


        }

        return redirect('/showlogin');
      }
        
}
