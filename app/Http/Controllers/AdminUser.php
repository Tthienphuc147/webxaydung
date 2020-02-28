<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class AdminUser extends Controller
{
    public function showListUser()
    {
         if(Request()->session()->has('id')&& Request()->session()->get('role')==1){
            $dataUser= 'App\Users'::where('id_role',2)->paginate(10);
            return View('admin.mainPage.user.user')->with('dataUser',$dataUser);
         }
         return redirect('/admin');
    }
    public function deleteUser($id){
        if(Request()->session()->has('id')&& Request()->session()->get('role')==1){
            $data='App\Users'::find($id);
            if(!is_null($data))
                $data->delete();
            
            return redirect('/admin/user/list');
        }
        return redirect('/admin');
    }
    public function createUser(){
        if(Request()->session()->has('id')&& Request()->session()->get('role')==1){
            return View('admin.mainPage.user.addUser');
        }
        return redirect('/admin');
    }
    public function addUser(Request $request)
    {
        if(Request()->session()->has('id')&& Request()->session()->get('role')==1){
            $name=$request->input('name');
            $pass=$request->input('pass');
            $data='App\Users'::where('username',$name)->get();
            if(sizeof($data)==0){
                $users=new Users();
                $users['username'] = $name;
                $users['password']=$pass;
                $users['id_role']=2;
                $users->save();
            }
            return redirect('/admin/user/list');
        }
        return redirect('/admin');
    }
    public function showChange()
    {
        if(Request()->session()->has('id')&& Request()->session()->get('role')==1){
            $data='App\Users'::find(Request()->session()->get('id'));
            return View('admin.mainPage.user.changeUser')->with('user',$data);
        }
        return redirect('/admin');
    }
    public function changeSaveUser(Request $request)
    {
        if(Request()->session()->has('id')&& Request()->session()->get('role')==1){
           
            $pass=$request->input('pass');
            $user='App\Users'::find(Request()->session()->get('id'));
           
            if($pass!="")$user->password=$pass;
            $user->save();
            return redirect('/admin/user/list');

        }
        return redirect('/admin');
    }
}
