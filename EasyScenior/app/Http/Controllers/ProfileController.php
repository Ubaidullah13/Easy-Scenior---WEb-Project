<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class ProfileController extends Controller
{
    
    public function ProfileUpdate($name, Request $request)
     {
    Users::WHERE('username', $name)->update(['fullname'=>$request['name']]);
    Users::WHERE('username', $name)->update(['email'=>$request['email']]);
    Users::WHERE('username', $name)->update(['wallet'=>$request['wallet']]);
    
    if($request->image != null){
      
      $imageName =  $name.'.'.$request->image->extension();  
      $request->image->move(public_path('Images/users'), $imageName);
      Users::WHERE('username', $name)->update(['userImage'=> $imageName]);
     }
    
    $url=url('/profile'). "/" .$name;
    return redirect ($url);
  }
}