<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Sessions;
use App\Models\Packages;

class BookSession extends Controller
{
    public function session($Tname, $Sname, Request $request){
       echo $request['SPusingForm'];
       $wallet = Users::SELECT('wallet')->WHERE('username',$Sname)->get();
       if(($wallet[0]->wallet) > ($request['SPusingForm']))
       {
           $Ubalance = $wallet[0]->wallet - $request['SPusingForm'];
           $Tbalance = $request['SPusingForm']*0.80;
           $Abalance = $request['SPusingForm']*0.20;

           Users::WHERE('username', $Sname)->update(['wallet'=>$Ubalance]);
           Users::WHERE('username', $Tname)->update(['wallet'=>$Tbalance]);
           Users::WHERE('username', "Admin")->update(['wallet'=>$Abalance]);
           
           $Pid = Packages::SELECT('pkg_ID')->WHERE('price',$request['SPusingForm'])->get();
           $session = new Sessions;
           $session->tutor = $Tname;
           $session->student = $Sname;
           $session->pckg = $Pid[0]->pkg_ID;


           $title = "Session Booked";
           $data = compact('title');
           $url = url('/DashTutorsDetails/').$Tname;
          return redirect($url)->with($data);

           
       }
       else
       {
            $title = "Session Not Booked";
            $data = compact('title');
           $url = url('/DashTutorsDetails').'/'.$Tname;
           return redirect($url)->with($data);
       }
    }
}

// $faq= new Faq;
// $faq->question = $request['question'];