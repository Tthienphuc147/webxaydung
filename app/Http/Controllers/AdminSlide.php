<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SlideImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AdminSlide extends Controller
{
  
      public function showList(){
        if(Request()->session()->has('id')){
          $list=DB::table('slide_image')
          ->paginate(10);
          return view('admin.mainPage.slide.slide')->with('slideList',$list);
        }

        return redirect('/showlogin');
      }
      public function showSlide($id){
        if(Request()->session()->has('id')){
          $list='App\SlideImage'::find($id);
          return view('admin.mainPage.slide.detailSlide')->with('slide',$list);

        }

        return redirect('/showlogin');
      }
      public function update(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
          if($id!=""){
            $data='App\Slide'::find($id);

            if ($request->hasFile('image_url')) {
              $img_file = $request->file('image_url');
              $img_file_extension = $img_file->getClientOriginalExtension();
              $img_file_name = $img_file->getClientOriginalName();
              $random_file_name =$img_file_name;
              while (file_exists('/public/image/slide/' . $random_file_name)) {
                  $random_file_name = $img_file_name;
              }
              $img_file->move('public/image/slide/', $random_file_name);
              $data->image= $random_file_name;
          }
            $data->save();
            
          }
          return redirect('/admin/slide');
          

        }

        return redirect('/showlogin');
      }
      public function showAdd(){
        if(Request()->session()->has('id')){
          return view('admin.mainPage.slide.addSlide');

        }

        return redirect('/showlogin');
      }
      public function add(Request $request){
        if(Request()->session()->has('id')){
          $id=$request->input('idd');
            $data=new SlideImage();
            
           if ($request->hasFile('image_url')) {
              $img_file = $request->file('image_url');
              var_dump($img_file);
              $img_file_extension = $img_file->getClientOriginalExtension();
              $img_file_name = $img_file->getClientOriginalName();
              $random_file_name =$img_file_name;
              while (file_exists('/public/image/slide/' . $random_file_name)) {
                  $random_file_name = $img_file_name;
              }
              $img_file->move('public/image/slide/', $random_file_name);
              $data->image_url= $random_file_name;
          }
          else{
              $data->image_url="macdinh.jpg";
            }
          
            
            $data->save();
            
          return redirect('/admin/slide');
          

        }

       return redirect('/showlogin');
      }

     
        
}
