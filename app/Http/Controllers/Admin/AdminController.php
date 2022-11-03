<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
{
    //admin Dashboard page
    public function AdminDashboard(){
        return view('admin.dashboard');
    }

    // admi login 
    public function login(Request $request){
      
      if($request->isMethod('post')){    
        if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' =>$data['password'], 'status' =>1 ])){

        }else{

        }

      } // main end if

      return view('admin.auth.login');
    }

}
