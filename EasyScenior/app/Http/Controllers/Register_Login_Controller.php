<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use Session;
use Crypt;

class Register_Login_Controller extends Controller
{
    function registerUser(Request $req){
        $validateData = $req->validate([
        'name' => 'required|regex:/^[a-z A-Z]+$/u',
        'username' => 'required|regex:/^[a-z A-Z 0-9 _]+$/',
        'email' => 'required|email',
        'password' => 'required|min:6|max:12',
        'confirm_password' => 'required|same:password',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'mobile' => 'numeric|required|digits:10'
        ]);
        
        $result = DB::table('user')
        ->where('email',$req->input('email'))
        ->ORwhere('username',$req->input('username'))
        ->get();

        

        $res = json_decode($result,true);
        print_r($res);
        
        if(sizeof($res)==0){
        $data = $req->input();
        $users = new Users;
        $users->fullname = $data['name'];
        $users->username = $data['username'];
        $users->email = $data['email'];
        $encrypted_password = crypt::encrypt($data['password']);
        $users->password = $encrypted_password;
        $users->status = "student";

        if($req->image != null){
        $imageName = ($data['username']).'.'.$req->image->extension();  
        $req->image->move(public_path('Images\users'), $imageName);

        $users->userImage = $imageName;
        }
        else{
            $users->userImage = "Default.png";
        }
        $users->save();
        $req->session()->flash('register_status','Student has been registered successfully');
        return redirect('/register');
        }
        else{
        $req->session()->flash('register_status','This Email or Username already exists.');
        return redirect('/register');
        }
        }

        // Login
        function login(Request $req){
          
            // $userData=Users::all();
            // $dashboardData = compact('userData');


            $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
            ]);
            
            $result = DB::table('user')
            ->where('email',$req->input('email'))
            ->get();

            $dashboardData = compact('result');

            
            $res = json_decode($result,true);
            //print_r($res);
            
            if(sizeof($res)==0){
            $req->session()->flash('error','Email does not exist. Please register yourself first');
            echo "Email Does not Exist.";
            return redirect('login');
            }
            else{
            //echo "Hello";
            $encrypted_password = $result[0]->password;
            $decrypted_password = crypt::decrypt($encrypted_password);
            if($decrypted_password==$req->input('password')){
            //echo "You are logged in Successfully";

            //storing data in session
            $req->session()->put('username',$result[0]->username);


            //checking student status
            if($result[0]->status=="student"){ 
                return view('starter Dashboard');
            }
            else{ 
                return redirect('/');
            }
            }
            else{
            $req->session()->flash('error','Password Incorrect!!!');
            echo "Email Does not Exist.";
            return redirect('login');
            }
            }
            }
            
}
