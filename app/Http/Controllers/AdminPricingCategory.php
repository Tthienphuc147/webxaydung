<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\PricingCategory;


class AdminPricingCategory extends Controller
{
     public function showList(){
        if(Request()->session()->has('id')){
          $list='App\PricingCategory'::orderby('id','desc')->paginate(10);
          return view('admin.mainPage.pricingCategory.pricingCategory')->with('pricingCategoryList',$list);
        }

        return redirect('/showlogin');
      }
      public function showPricingCategory($id){
        if(Request()->session()->has('id')){
          $list='App\PricingCategory'::find($id);
          return view('admin.mainPage.pricingCategory.detailPricingCategory')->with('pricingCategoryDetail',$list);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\PricingCategory'::find($id);
            $name=$request->input('name');
            if($name!=""){
              $data->name_pricing_category=$name;
              $data->save();
            }
            
          }
          return redirect('/admin/pricingcategory');
          

        }

        return redirect('/showlogin');
      }

      public function showAdd(){
        if(Request()->session()->has('id')){
          return view('admin.mainPage.pricingCategory.addPricingCategory');
        }

        return redirect('/showlogin');
      }

      public function add(Request $request){
        if(Request()->session()->has('id')){
          
            $data=new PricingCategory();
            $name=$request->input('name');
            if($name!=""){
              $data->name_pricing_category=$name;
              $data->save();
          }
          return redirect('/admin/pricingcategory');
        

        }

        return redirect('/showlogin');
      }
      
}
