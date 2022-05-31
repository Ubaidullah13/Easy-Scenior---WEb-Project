<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class ProfileController extends Controller
{
    
    public function ProfileUpdate($name, Request $request)
     {
       $wallet = Users::SELECT('wallet')->where('username',$name)->get();

    Users::WHERE('username', $name)->update(['fullname'=>$request['name']]);
    Users::WHERE('username', $name)->update(['email'=>$request['email']]);
    Users::WHERE('username', $name)->update(['wallet'=>($request['wallet'] + $wallet[0]->wallet)]);
    
    if($request->image != null){
      
      $imageName =  $name.'.'.$request->image->extension();  
      $request->image->move(public_path('Images/users'), $imageName);
      Users::WHERE('username', $name)->update(['userImage'=> $imageName]);
     }
    
    $url=url('/profile'). "/" .$name;
    return redirect ($url);
  }
}