<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{
   public function showDashboard(){

          return view('admin.mainPage.mainPage');

    }

    /*admin-contact*/
    public function showContactList(){
          $contact='App\Contact'::paginate(6);
          return view('admin.mainPage.contact.contact')->with('contactList',$contact);
    }
     public function showContactDetail($unsigned_name){
          $contact='App\Contact'::where('id',$unsigned_name)->first();
          return view('admin.mainPage.contact.detailContact')->with('contactDetail',$contact);
    }

        
}
