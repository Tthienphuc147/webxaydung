<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{
   public function showDashboard(){
      if(Request()->session()->has('id')){

          return view('admin.mainPage.mainPage');
      }
      return redirect('/showlogin');

    }

    /*admin-contact*/
    public function showContactList(){
          if(Request()->session()->has('id')){
            $contact='App\Contact'::where('status',0)->orderby('id','desc')->paginate(6);
            $contacts='App\Contact'::where('status',1)->orderby('id','desc')->paginate(6);
            return view('admin.mainPage.contact.contact')->with('contactList',$contact)->with('contactListAccept',$contacts);
          }
          return redirect('/showlogin');
          
    }
     public function showContactDetail($unsigned_name){
      if(Request()->session()->has('id')){
          $contact='App\Contact'::where('id',$unsigned_name)->first();
          return view('admin.mainPage.contact.detailContact')->with('contactDetail',$contact);
      }
      return redirect('/showlogin');
    }
    public function changeContactDetailStatus($unsigned_name){
      if(Request()->session()->has('id')){
            $contact='App\Contact'::find($unsigned_name);
            $contact->status=1;
            $contact->save();
            return view('admin.mainPage.contact.detailContact')->with('contactDetail',$contact);
            }
      return redirect('/showlogin');

      }

        
}
