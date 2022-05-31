<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Sessions;
use App\Models\Packages;
use App\Models\St_Enrolled_Courses;

class BookSession extends Controller
{
    // public function session($Tname, $Sname, Request $request){
    //    echo $request['SPusingForm'];
    //    $wallet = Users::SELECT('wallet')->WHERE('username',$Sname)->get();
    //    if(($wallet[0]->wallet) > ($request['SPusingForm']))
    //    {
    //        $Ubalance = $wallet[0]->wallet - $request['SPusingForm'];
    //        $Tbalance = $request['SPusingForm']*0.80;
    //        $Abalance = $request['SPusingForm']*0.20;

    //        Users::WHERE('username', $Sname)->update(['wallet'=>$Ubalance]);
    //        Users::WHERE('username', $Tname)->update(['wallet'=>$Tbalance]);
    //        Users::WHERE('username', "Admin")->update(['wallet'=>$Abalance]);
           
    //        $Pid = Packages::SELECT('pkg_ID')->WHERE('price',$request['SPusingForm'])->get();
    //        $session = new Sessions;
    //        $session->tutor = $Tname;
    //        $session->student = $Sname;
    //        $session->pckg = $Pid[0]->pkg_ID;


    //        $title = "Session Booked";
    //        $data = compact('title');
    //        $url = url('/DashTutorsDetails/').$Tname;
    //       return redirect($url)->with($data);

           
    //    }
    //    else
    //    {
    //         $title = "Session Not Booked";
    //         $data = compact('title');
    //        $url = url('/DashTutorsDetails').'/'.$Tname;
    //        return redirect($url)->with($data);
    //    }
    // }

    public function Course($Tname, $Sname, $price, $Cid){

        $already = St_Enrolled_Courses::SELECT('course_id','st_username')->WHERE('course_id',$Cid)->WHERE('st_username',$Sname)->get();
        $wallet = Users::SELECT('wallet')->WHERE('username',$Sname)->get();
        $Twallet = Users::SELECT('wallet')->WHERE('username',$Tname)->get();
        $Awallet = Users::SELECT('wallet')->WHERE('username','Admin')->get();

        if(($already->isEmpty()))
        {
            if(($wallet[0]->wallet) > $price){

            $Ubalance = $wallet[0]->wallet - $price;
            $Tbalance = $price * 0.80;
            $Abalance = $price * 0.20;
 
            $Tnew = $Twallet[0]->wallet + $Tbalance;
            $Anew = $Awallet[0]->wallet +  $Abalance;

            Users::WHERE('username', $Sname)->update(['wallet'=>$Ubalance]);
            Users::WHERE('username', $Tname)->update(['wallet'=>$Tnew ]);
            Users::WHERE('username', "Admin")->update(['wallet'=>$Anew ]);
            
            //$Pid = Packages::SELECT('pkg_ID')->WHERE('price',$request['SPusingForm'])->get();
            
            
            
             $St_en = new St_Enrolled_Courses;
            $St_en->st_username = $Sname;
            $St_en->course_id = $Cid;
            $St_en->save();
            $title = "You Have successfully purchased a course! access it from Dashboard";

            }
            else{
                $title = "Not Enough Credits";
            }

            $data = compact('title');
            $url = '/DashCourseDetails'.'/'.$Cid;
            return redirect($url)->with('title', $title);

    
            //$St_en->pckg = $Pid[0]->pkg_ID;
 
 
            //$title = "You Have successfully purchased a course! access it from Dashboard";
           
 
            
        }
        else
        {
            $title = "Already Enrolled";
           // $data = compact('title');
            $url ='/DashCourseDetails/'.$Cid;
           return redirect($url)->with('title', $title);
        }
    }
}

// $faq= new Faq;
// $faq->question = $request['question'];