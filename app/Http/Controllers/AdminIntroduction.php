<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Introduction;
use Illuminate\Support\Facades\DB;


class AdminIntroduction extends Controller
{
 
    public function show(){
       if(Request()->session()->has('id')){
            $data='App\Introduction'::first();
        
         return view('admin.mainPage.introduction.introduction')->with('data',$data);
          

        }

        return redirect('/showlogin');
    }
        public function update(Request $request){
        if(Request()->session()->has('id')){
            $data='App\Introduction'::first();
            $history=$request->input('history');
            $information=$request->input('information');
            $service=$request->input('service');
            $company_diagram=$request->input('company_diagram');
            if($history!=""){
              $data->history=$history;
              
            }
            if($information!=""){
              $data->information=$information;
            }
            if($service!=""){
              $data->service=$service;
              
            }
            if($company_diagram!=""){
              $data->company_diagram=$company_diagram;
            }
            $data->save();
         return view('admin.mainPage.mainPage');
          

        }

        return redirect('/showlogin');
      }
      
        
}
