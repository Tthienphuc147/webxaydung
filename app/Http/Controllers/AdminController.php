<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{
   public function showDashboard(){

          return view('admin.mainPage.mainPage');

    }
        
}
