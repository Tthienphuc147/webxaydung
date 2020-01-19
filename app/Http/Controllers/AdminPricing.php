<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PricingCategory;
use App\Pricing;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AdminPricing extends Controller
{
  
      public function showList(){
        if(Request()->session()->has('id')){
          $list=DB::table('pricing_category')
          ->join('pricing','pricing_category.id','=','pricing.pricing_category_id')
          ->orderby('pricing.id','desc')
          ->paginate(10);
          return view('admin.mainPage.pricing.pricing')->with('pricingList',$list);
        }

        return redirect('/showlogin');
      }
      public function showPricing($id){
        if(Request()->session()->has('id')){
          $list='App\Pricing'::find($id);
          $lists="App\PricingCategory"::orderby('id','desc')->get();
          return view('admin.mainPage.pricing.detailPricing')->with('pricingDetail',$list)->with('pricingCategory',$lists);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\Pricing'::find($id);
            $content=$request->input('noidung');
            $name=$request->input('name');
            $category=$request->input('category');
            if($name!=""){
              $data->name_pricing=$name;
              
            }
            if($content!=""){
              $data->content=$content;
            }
            if($category!=""){
              $data->pricing_category_id=$category;
            }
            $data->save();
            
          }
          return redirect('/admin/pricing');
          

        }

        return redirect('/showlogin');
      }
      public function showAdd(){
        if(Request()->session()->has('id')){
          $lists="App\PricingCategory"::orderby('id','desc')->get();
          return view('admin.mainPage.pricing.addPricing')->with('pricingCategory',$lists);

        }

        return redirect('/showlogin');
      }
      public function add(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
            $data=new Pricing();
            $content=$request->input('noidung');
            $name=$request->input('name');
            $category=$request->input('category');
            if($name!=""){
              $data->name_pricing=$name;
              
            }
            else{
              $data->name_pricing="chưa nhập";
            }
            if($content!=""){
              $data->content=$content;
            }
            else{
              $data->content="chưa nhập";
            }
            if($category!=""){
              $data->pricing_category_id=$category;
            }
            else{
              $data->pricing_category_id=1;
            }
          
            
            $data->save();
            
          return redirect('/admin/pricing');
          

        }

        return redirect('/showlogin');
      }

     
        
}
