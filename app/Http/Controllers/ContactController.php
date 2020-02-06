<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ContactController extends Controller
{
    
   public function showContact(){
        return view('mainPage.contact');
      
    }
      public function sendContact(Request $request){

            $data=new Contact();
            if($request->input('full_name')!="")$data->full_name=$request->input('full_name');

            if($request->input('address')!="")$data->address=$request->input('address');
        
            if($request->input('phone')!="")$data->phone=$request->input('phone');
        
            if($request->input('email')!="")$data->email=$request->input('email');
          
            if($request->input('demand')!="")$data->demand=$request->input('demand');

            if($request->input('message')!="")$data->message=$request->input('message');

            if($request->input('land_direction')!="")$data->land_direction=$request->input('land_direction');
            if($request->input('type')!="")$data->type=$request->input('type');
            if($request->input('other')!="")$data->other=$request->input('other');
         
            if($request->hasFile('plot_map_image'))
            {
                $img_file = $request->file('plot_map_image');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = Str::random(4).'_'.$img_file_name;
                while(file_exists('/public/image/contact/'.$random_file_name))
                {
                    $random_file_name = Str::random(4).'_'.$img_file_name;
                }

                $img_file->move('public/image/contact/',$random_file_name);
                $data->plot_map_image = $random_file_name;
            }
               if($request->hasFile('land_image'))
            {
                $img_file1 = $request->file('land_image');

                $img_file_extension1 = $img_file1->getClientOriginalExtension();
                $img_file_name1 = $img_file1->getClientOriginalName();
                $random_file_name1 = Str::random(4).'_'.$img_file_name1;
                while(file_exists('/public/image/contact/'.$random_file_name1))
                {
                    $random_file_name1 = Str::random(4).'_'.$img_file_name1;
                }

                $img_file1->move('public/image/contact/',$random_file_name1);
                $data->land_image = $random_file_name1;
            }
                    $name = $request->input('full_name');
                    Mail::to($request->input('email'))->send(new SendMailable($name));
               
                $data->save();   

            return redirect('/contactView');
      
    }
  

        
}
