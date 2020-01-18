<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{
  
      public function showLogin(){
      return view('admin.login');
    }
    public function LoginAuth(Request $request){
        $username = $request->input('username');
        $pass=$request->input('passlogin');
        $data='App\Users'::where('username',$username)->get();
                $success=false;
            foreach($data as $account) {
                if($pass == $account['password']){
                    $request->session()->put('login', true);
                    $request->session()->put('id', $account['id']);
                    $request->session()->put('username', $account['username']);
                    return redirect('/admin');
                    $success=true;
                    break;

                }
            }
            if($success===false){
                return redirect('/showlogin');
            }

    }
    public function CheckLogin(Request $request){

        if( $request->session()->has('id')) {
            return redirect('/')->with('datas',$request->session());
        }
        else return view('admin.login');
    }
    public function Logout(Request $request){
        $request->session()->flush();
        return redirect('/');

    }

}