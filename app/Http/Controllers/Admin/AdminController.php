<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\Admin;
use App\Models\Vendor;
use Image;

class AdminController extends Controller
{
    //admin Dashboard page
    public function AdminDashboard(){
        return view('admin.dashboard');
    }


    // admin login
    public function login(Request $request){
       $data = $request->all();
      if($request->isMethod('post')){
        if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' =>$data['password'], 'status' =>1 ])){
              return redirect('admin/dashboard');
        }else{
          return redirect()->back()->with('error_message', 'Invalid Email or Password');
        }
      }
      return view('admin.auth.login');
    }


    // admin Logout
    public function logout(){
      Auth::guard('admin')->logout();
      return redirect('admin/login');
    }


    // update admin Password
    public function updateAdminPassword(Request $request){
    if($request->isMethod('post')){
      $data = $request->all();
      // check if current passeord entered by admin is curret
      if(Hash::check($data['current_password'], Auth::guard('admin')->user()->password)){
      // check new password and confirm password
        if($data['confirm_password']==$data['new_password']){
          Admin::where('id', Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_password'])]);

            return redirect()->back()->with('success_message', 'Your Password Update Success');
        }else{
            return redirect()->back()->with('error_message', 'Your New Password & confirm password Not matching!!');
        }

      }else{
       return redirect()->back()->with('error_message', 'Your Current Password is Incorrect!');
      }
    }

      $update_password = Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray();
      return view('admin.settings.update_password', compact('update_password'));
    }


    // admin password check
    public function checkAdminCurrentPassword(Request $request){
      $data = $request->all();
      if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
        return "true";
      }else{
        return "false";
      }
    }


    // update admin details
    public function updateAdminDetails(Request $request){  

     if($request->isMethod('POST')){  
      $data = $request->all();       
         // valadation   
        $request->validate([
           'name' => 'required',
           'email'=>'required',
           'mobile' => 'required|numeric|min:10', 
        ]);        

   $existingimages = Admin::where('id', Auth::guard('admin')->user()->id)->select('image')->first();    

    if ($request->file('image')) {  
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('admin/images/photo/'),$filename);
      $data['image'] = $filename;
  }


          Admin::where('id', Auth::guard('admin')->user()->id)->update(['email' => $data['email'],'name' => $data['name'], 'mobile' => $data['mobile'] ]);
          return redirect()->back()->with('success_message', 'Admin Details Update successfully');
      }       
  

        return view('admin.profile.update-admin-details');
    }

    // vendor details update
    public function updateVendorDetails(Request $request, $slug){

        if($slug == 'personal'){         
          if($request->isMethod('POST')){  
            $data = $request->all();  
              // valadation   
              $request->validate([
                'name' => 'required',
                'email'=>'required',              
                'mobile' => 'required|numeric|min:10', 
              ]); 
           $existingimages = Admin::where('id', Auth::guard('admin')->user()->id)->select('image')->first(); 
          if ($request->file('image')) {  
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('admin/images/photo/'),$filename);
            $data['image'] = $filename;
         }
          Admin::where('id', Auth::guard('admin')->user()->id)
          ->update([
          'email' => $data['email'],
          'name' => $data['name'], 
          'mobile' => $data['mobile'],                
        ]);

          Vendor::where('id', Auth::guard('admin')->user()->id)
          ->update([
            'email' => $data['email'],
            'name' => $data['name'], 
            'mobile' => $data['mobile'], 
            'address' => $data['address'], 
            'country' => $data['country'], 
            'city' => $data['city'], 
            'state' => $data['state'], 
            'pincode' => $data['pincode'] 
           ]);
        
          return redirect()->back()->with('success_message', 'Admin Details Update successfully');
        }     

        }elseif($slug == 'busniess'){

        }elseif($slug == 'bank'){
          
        }
        return view('admin.profile.update-vendor-details', compact('slug'));
    }

}
