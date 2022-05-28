<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorRatings;

class AjaxController extends Controller
{
    public function view($name){
        $findratings = TutorRatings::WHERE('tutor',$name)->inRandomOrder()->get();        
        $da = compact('findratings');
        $count = count($findratings);
        return response()->json(array('msg'=> $da, 'count'=>$count), 200);


    }
}
