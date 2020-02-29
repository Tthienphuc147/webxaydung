<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\FeedBack;


class AdminFeedBack extends Controller
{
     public function showList(){
        if(Request()->session()->has('id') && Request()->session()->get('role')==1){
          $list='App\FeedBack'::orderby('id','desc')->paginate(10);
          return view('admin.mainPage.feedback.feedBack')->with('feedBackList',$list);
        }

        return redirect('/showlogin');
      }
      public function showFeedBack($id){
        if(Request()->session()->has('id') && Request()->session()->get('role')==1){
          $list='App\FeedBack'::find($id);
          return view('admin.mainPage.feedBack.detailFeedBack')->with('feedBackDetail',$list);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id') && Request()->session()->get('role')==1){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\FeedBack'::find($id);
            $name=$request->input('name');
            $feedback=$request->input('feedback');
            if($name!="" && $feedback!=""){
              $data->customer_name=$name;
              $data->feedback=$feedback;
              $data->save();
            }
            
          }
          return redirect('/admin/feedBack');
          

        }

        return redirect('/showlogin');
      }

      public function showAdd(){
        if(Request()->session()->has('id') && Request()->session()->get('role')==1){
          return view('admin.mainPage.FeedBack.addFeedBack');
        }

        return redirect('/showlogin');
      }

      public function add(Request $request){
        if(Request()->session()->has('id') && Request()->session()->get('role')==1){
          
            $data=new FeedBack();
            $name=$request->input('name');
            $feedback=$request->input('feedback');
            if($name!="" && $feedback!=""){
              $data->customer_name=$name;
              $data->feedback=$feedback;
              $data->save();
            }
          return redirect('/admin/feedBack');
        

        }

        return redirect('/showlogin');
      }
      
}
